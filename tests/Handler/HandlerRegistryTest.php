<?php

namespace JMS\Serializer\Tests\Handler;

use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\HandlerRegistry;

class HandlerRegistryTest extends \PHPUnit\Framework\TestCase
{
    protected $handlerRegistry;

    protected function setUp(): void
    {
        $this->handlerRegistry = $this->createHandlerRegistry();
    }

    public function testRegisteredHandlersCanBeRetrieved()
    {
        $jsonSerializationHandler = new DummyHandler();
        $this->handlerRegistry->registerHandler(GraphNavigator::DIRECTION_SERIALIZATION, \stdClass::class, 'json', $jsonSerializationHandler);

        $jsonDeserializationHandler = new DummyHandler();
        $this->handlerRegistry->registerHandler(GraphNavigator::DIRECTION_DESERIALIZATION, \stdClass::class, 'json', $jsonDeserializationHandler);

        $xmlSerializationHandler = new DummyHandler();
        $this->handlerRegistry->registerHandler(GraphNavigator::DIRECTION_SERIALIZATION, \stdClass::class, 'xml', $xmlSerializationHandler);

        $xmlDeserializationHandler = new DummyHandler();
        $this->handlerRegistry->registerHandler(GraphNavigator::DIRECTION_DESERIALIZATION, \stdClass::class, 'xml', $xmlDeserializationHandler);

        $this->assertSame($jsonSerializationHandler, $this->handlerRegistry->getHandler(GraphNavigator::DIRECTION_SERIALIZATION, \stdClass::class, 'json'));
        $this->assertSame($jsonDeserializationHandler, $this->handlerRegistry->getHandler(GraphNavigator::DIRECTION_DESERIALIZATION, \stdClass::class, 'json'));
        $this->assertSame($xmlSerializationHandler, $this->handlerRegistry->getHandler(GraphNavigator::DIRECTION_SERIALIZATION, \stdClass::class, 'xml'));
        $this->assertSame($xmlDeserializationHandler, $this->handlerRegistry->getHandler(GraphNavigator::DIRECTION_DESERIALIZATION, \stdClass::class, 'xml'));
    }

    protected function createHandlerRegistry()
    {
        return new HandlerRegistry();
    }
}

class DummyHandler
{
    public function __call($name, $arguments)
    {
    }
}
