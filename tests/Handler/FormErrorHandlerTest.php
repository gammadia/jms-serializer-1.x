<?php

namespace JMS\Serializer\Tests\Handler;

use JMS\Serializer\Handler\FormErrorHandler;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\Forms;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class FormErrorHandlerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var \JMS\Serializer\Handler\FormErrorHandler
     */
    protected $handler;

    /**
     * @var \JMS\Serializer\VisitorInterface
     */
    protected $visitor;

    /**
     * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
     */
    protected $dispatcher;

    /**
     * @var \Symfony\Component\Form\FormFactoryInterface
     */
    protected $factory;

    protected function setUp(): void
    {
        $this->handler = new FormErrorHandler(new Translator('en'));
        $this->visitor = new JsonSerializationVisitor(new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy()));
        $this->dispatcher = new EventDispatcher();
        $this->factory = $this->createMock(\Symfony\Component\Form\FormFactoryInterface::class);
    }

    protected function tearDown(): void
    {
        $this->handler = null;
        $this->visitor = null;
        $this->dispatcher = null;
        $this->factory = null;
    }

    public function testSerializeEmptyFormError()
    {
        $form = $this->createForm();
        $json = json_encode($this->handler->serializeFormToJson($this->visitor, $form, array()));

        $this->assertSame('{}', $json);
    }

    public function testErrorHandlerWithoutTranslator()
    {
        $this->handler = new FormErrorHandler();
        $form = $this->createForm();
        $form->addError(new FormError('error!'));
        $json = json_encode($this->handler->serializeFormToJson($this->visitor, $form, array()));

        $this->assertSame(json_encode(array(
            'errors' => array(
                'error!',
            ),
        )), $json);
    }

    public function testSerializeHasFormError()
    {
        $form = $this->createForm();
        $form->addError(new FormError('error!'));
        $json = json_encode($this->handler->serializeFormToJson($this->visitor, $form, array()));

        $this->assertSame(json_encode(array(
            'errors' => array(
                'error!',
            ),
        )), $json);
    }


    public function testSerializeChildElements()
    {
        $formFactory = Forms::createFormFactory();
        $form = $formFactory->createBuilder()
            ->add('child')
            ->add('date')
            ->getForm();

        $form->addError(new FormError('error!'));
        $form->get('date')->addError(new FormError('child-error'));

        $json = json_encode($this->handler->serializeFormToJson($this->visitor, $form, array()));

        $this->assertSame(json_encode(array(
            'errors' => array(
                'error!',
            ),
            'children' => [
                'child' => new \stdClass(),
                'date' => ['errors' => ['child-error']]
            ]
        )), $json);

    }

    public function testDefaultTranslationDomain()
    {
        $interface = interface_exists(TranslatorInterface::class)
            ? TranslatorInterface::class
            : LegacyTranslatorInterface::class;
        $translator = $this->getMockBuilder($interface)->getMock();
        assert($translator instanceof Translator || $translator instanceof MockObject);

        $handler = new FormErrorHandler($translator);

        $translator->expects($this->once())
            ->method('trans')
            ->with(
                $this->equalTo('error!'),
                $this->equalTo([]),
                $this->equalTo('validators')
            );

        $formError = $this->createMock(\Symfony\Component\Form\FormError::class);
        $formError->expects($this->once())->method('getMessageTemplate')->willReturn('error!');
        $formError->expects($this->once())->method('getMessagePluralization')->willReturn(null);
        $formError->expects($this->once())->method('getMessageParameters')->willReturn([]);

        $this->invokeMethod($handler, 'getErrorMessage', [$formError,]);
    }

    public function testDefaultTranslationDomainWithPluralTranslation()
    {
        $interface = interface_exists(TranslatorInterface::class)
            ? TranslatorInterface::class
            : LegacyTranslatorInterface::class;
        $translator = $this->getMockBuilder($interface)->getMock();
        assert($translator instanceof Translator || $translator instanceof MockObject);

        $handler = new FormErrorHandler($translator);

        if (TranslatorInterface::class === $interface) {
            $translator->expects($this->once())
                ->method('trans')
                ->with(
                    $this->equalTo('error!'),
                    $this->equalTo(['%count%' => 0]),
                    $this->equalTo('validators')
                );
        } else {
            $translator->expects($this->once())
                ->method('transChoice')
                ->with(
                    $this->equalTo('error!'),
                    $this->equalTo(0),
                    $this->equalTo([]),
                    $this->equalTo('validators')
                );
        }

        $formError = $this->createMock(\Symfony\Component\Form\FormError::class);
        $formError->expects($this->once())->method('getMessageTemplate')->willReturn('error!');
        $formError->expects($this->exactly(2))->method('getMessagePluralization')->willReturn(0);
        $formError->expects($this->once())->method('getMessageParameters')->willReturn([]);

        $this->invokeMethod($handler, 'getErrorMessage', [$formError,]);
    }

    public function testCustomTranslationDomain()
    {
        $interface = interface_exists(TranslatorInterface::class)
            ? TranslatorInterface::class
            : LegacyTranslatorInterface::class;
        $translator = $this->getMockBuilder($interface)->getMock();
        assert($translator instanceof Translator || $translator instanceof MockObject);

        $handler = new FormErrorHandler($translator, 'custom_domain');

        $translator->expects($this->once())
            ->method('trans')
            ->with(
                $this->equalTo('error!'),
                $this->equalTo([]),
                $this->equalTo('custom_domain')
            );

        $formError = $this->createMock(\Symfony\Component\Form\FormError::class);
        $formError->expects($this->once())->method('getMessageTemplate')->willReturn('error!');
        $formError->expects($this->once())->method('getMessagePluralization')->willReturn(null);
        $formError->expects($this->once())->method('getMessageParameters')->willReturn([]);

        $this->invokeMethod($handler, 'getErrorMessage', [$formError,]);
    }

    public function testCustomTranslationDomainWithPluralTranslation()
    {
        $interface = interface_exists(TranslatorInterface::class)
            ? TranslatorInterface::class
            : LegacyTranslatorInterface::class;
        $translator = $this->getMockBuilder($interface)->getMock();
        assert($translator instanceof Translator || $translator instanceof MockObject);

        $handler = new FormErrorHandler($translator, 'custom_domain');

        if (TranslatorInterface::class === $interface) {
            $translator->expects($this->once())
                ->method('trans')
                ->with(
                    $this->equalTo('error!'),
                    $this->equalTo(['%count%' => 0]),
                    $this->equalTo('custom_domain')
                );
        } else {
            $translator->expects($this->once())
                ->method('transChoice')
                ->with(
                    $this->equalTo('error!'),
                    $this->equalTo(0),
                    $this->equalTo([]),
                    $this->equalTo('custom_domain')
                );
        }

        $formError = $this->createMock(\Symfony\Component\Form\FormError::class);
        $formError->expects($this->once())->method('getMessageTemplate')->willReturn('error!');
        $formError->expects($this->exactly(2))->method('getMessagePluralization')->willReturn(0);
        $formError->expects($this->once())->method('getMessageParameters')->willReturn([]);

        $this->invokeMethod($handler, 'getErrorMessage', [$formError,]);

    }

    /**
     * @param string $name
     * @param EventDispatcherInterface $dispatcher
     * @param string $dataClass
     *
     * @return FormBuilder
     */
    protected function getBuilder($name = 'name', ?EventDispatcherInterface $dispatcher = null, $dataClass = null)
    {
        return new FormBuilder($name, $dataClass, $dispatcher ?: $this->dispatcher, $this->factory);
    }

    /**
     * @param string $name
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getMockForm($name = 'name')
    {
        $form = $this->createMock(\Symfony\Component\Form\Test\FormInterface::class);
        $config = $this->createMock(\Symfony\Component\Form\FormConfigInterface::class);

        $form->expects($this->any())
            ->method('getName')
            ->will($this->returnValue($name));
        $form->expects($this->any())
            ->method('getConfig')
            ->will($this->returnValue($config));

        return $form;
    }

    protected function createForm()
    {
        return $this->getBuilder()->getForm();
    }

    protected function invokeMethod($object, $method, array $args = [])
    {
        $reflectionMethod = new \ReflectionMethod($object, $method);
        $reflectionMethod->setAccessible(true);

        return $reflectionMethod->invokeArgs($object, $args);
    }
}
