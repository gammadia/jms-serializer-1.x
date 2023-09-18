<?php

namespace JMS\Serializer\Tests\Twig;

use JMS\Serializer\SerializerInterface;
use JMS\Serializer\Twig\SerializerExtension;
use JMS\Serializer\Twig\SerializerRuntimeExtension;
use JMS\Serializer\Twig\SerializerRuntimeHelper;
use PHPUnit\Framework\TestCase;
use Twig\TwigFilter;
use Twig\TwigFunction;

class SerializerExtensionTest extends TestCase
{
    public function testSerialize()
    {
        $mockSerializer = $this->createMock(SerializerInterface::class);
        $obj = new \stdClass();
        $mockSerializer
            ->expects($this->once())
            ->method('serialize')
            ->with($this->equalTo($obj), $this->equalTo('json'));
        $serializerExtension = new SerializerExtension($mockSerializer);
        $serializerExtension->serialize($obj);

        $this->assertEquals('jms_serializer', $serializerExtension->getName());

        $filters = $serializerExtension->getFilters();
        $this->assertInstanceOf(TwigFilter::class, $filters[0]);
        $this->assertSame(array($serializerExtension, 'serialize'), $filters[0]->getCallable());

        $this->assertEquals(
            array(new TwigFunction('serialization_context', '\JMS\Serializer\SerializationContext::create')),
            $serializerExtension->getFunctions()
        );
    }

    public function testRuntimeSerializerHelper()
    {
        $obj = new \stdClass();

        $mockSerializer = $this->createMock(SerializerInterface::class);
        $mockSerializer
            ->expects($this->once())
            ->method('serialize')
            ->with($this->equalTo($obj), $this->equalTo('json'));

        $serializerExtension = new SerializerRuntimeHelper($mockSerializer);
        $serializerExtension->serialize($obj);
    }

    public function testRuntimeSerializerExtension()
    {
        $serializerExtension = new SerializerRuntimeExtension();

        $this->assertEquals('jms_serializer', $serializerExtension->getName());
        $this->assertEquals(
            array(new TwigFilter('serialize', array(SerializerRuntimeHelper::class, 'serialize'))),
            $serializerExtension->getFilters()
        );
        $this->assertEquals(
            array(new TwigFunction('serialization_context', '\JMS\Serializer\SerializationContext::create')),
            $serializerExtension->getFunctions()
        );
    }
}
