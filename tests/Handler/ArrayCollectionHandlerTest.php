<?php

namespace JMS\Serializer\Tests\Handler;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Handler\ArrayCollectionHandler;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Tests\Fixtures\ExclusionStrategy\AlwaysExcludeExclusionStrategy;
use JMS\Serializer\VisitorInterface;
use Metadata\MetadataFactoryInterface;

class ArrayCollectionHandlerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function testSerializeArray()
    {
        $handler = new ArrayCollectionHandler();

        $visitor = $this->createMock(VisitorInterface::class);
        $visitor->method('visitArray')->with(['foo'])->willReturn(['foo']);

        $context = $this->createMock(SerializationContext::class);
        $type = ['name' => 'ArrayCollection', 'params' => []];

        $collection = new ArrayCollection(['foo']);

        $handler->serializeCollection($visitor, $collection, $type, $context);
    }

    /**
     * @doesNotPerformAssertions
     */
    public function testSerializeArraySkipByExclusionStrategy()
    {
        $handler = new ArrayCollectionHandler(false);

        $visitor = $this->createMock(VisitorInterface::class);
        $visitor->method('visitArray')->with([])->willReturn([]);

        $context = $this->createMock(SerializationContext::class);

        $factoryMock = $this->createMock(MetadataFactoryInterface::class);
        $factoryMock->method('getMetadataForClass')->willReturn(new ClassMetadata(ArrayCollection::class));

        $context->method('getExclusionStrategy')->willReturn(new AlwaysExcludeExclusionStrategy());
        $context->method('getMetadataFactory')->willReturn($factoryMock);


        $type = ['name' => 'ArrayCollection', 'params' => []];

        $collection = new ArrayCollection(['foo']);

        $handler->serializeCollection($visitor, $collection, $type, $context);
    }
}
