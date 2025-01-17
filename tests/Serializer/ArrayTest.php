<?php

namespace JMS\Serializer\Tests\Serializer;

use Doctrine\Common\Annotations\AnnotationReader;
use JMS\Serializer\Construction\UnserializeObjectConstructor;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\Metadata\Driver\AnnotationDriver;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\Tests\Fixtures\Author;
use JMS\Serializer\Tests\Fixtures\AuthorList;
use JMS\Serializer\Tests\Fixtures\Order;
use JMS\Serializer\Tests\Fixtures\Price;
use Metadata\MetadataFactory;
use PhpCollection\Map;

class ArrayTest extends \PHPUnit\Framework\TestCase
{
    protected $serializer;

    protected function setUp(): void
    {
        $namingStrategy = new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy());

        $this->serializer = new Serializer(
            new MetadataFactory(new AnnotationDriver(new AnnotationReader())),
            new HandlerRegistry(),
            new UnserializeObjectConstructor(),
            new Map(array('json' => new JsonSerializationVisitor($namingStrategy))),
            new Map(array('json' => new JsonDeserializationVisitor($namingStrategy)))
        );
    }

    public function testToArray()
    {
        $order = new Order(new Price(5));

        $expected = array(
            'cost' => array(
                'price' => 5
            )
        );

        $result = $this->serializer->toArray($order);

        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider scalarValues
     */
    public function testToArrayWithScalar($input)
    {
        $this->expectException(\JMS\Serializer\Exception\RuntimeException::class);
        $this->expectExceptionMessage(sprintf(
            'The input data of type "%s" did not convert to an array, but got a result of type "%s".',
            gettype($input),
            gettype($input)
        ));
        $result = $this->serializer->toArray($input);

        $this->assertEquals(array($input), $result);
    }

    public function scalarValues()
    {
        return array(
            array(42),
            array(3.14159),
            array('helloworld'),
            array(true),
        );
    }

    public function testFromArray()
    {
        $data = array(
            'cost' => array(
                'price' => 2.5
            )
        );

        $expected = new Order(new Price(2.5));
        $result = $this->serializer->fromArray($data, \JMS\Serializer\Tests\Fixtures\Order::class);

        $this->assertEquals($expected, $result);
    }

    public function testToArrayReturnsArrayObjectAsArray()
    {
        $result = $this->serializer->toArray(new Author(null));

        $this->assertSame(array(), $result);
    }

    public function testToArrayConversNestedArrayObjects()
    {
        $list = new AuthorList();
        $list->add(new Author(null));

        $result = $this->serializer->toArray($list);
        $this->assertSame(array('authors' => array(array())), $result);
    }
}
