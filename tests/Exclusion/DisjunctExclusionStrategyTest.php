<?php

namespace JMS\Serializer\Tests\Exclusion;

use JMS\Serializer\Exclusion\DisjunctExclusionStrategy;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\StaticPropertyMetadata;
use JMS\Serializer\SerializationContext;

class DisjunctExclusionStrategyTest extends \PHPUnit\Framework\TestCase
{
    public function testShouldSkipClassShortCircuiting()
    {
        $metadata = new ClassMetadata('stdClass');
        $context = SerializationContext::create();

        $strat = new DisjunctExclusionStrategy(array(
            $first = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
            $last = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
        ));

        $first->expects($this->once())
            ->method('shouldSkipClass')
            ->with($metadata, $context)
            ->will($this->returnValue(true));

        $last->expects($this->never())
            ->method('shouldSkipClass');

        $this->assertTrue($strat->shouldSkipClass($metadata, $context));
    }

    public function testShouldSkipClassDisjunctBehavior()
    {
        $metadata = new ClassMetadata('stdClass');
        $context = SerializationContext::create();

        $strat = new DisjunctExclusionStrategy(array(
            $first = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
            $last = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
        ));

        $first->expects($this->once())
            ->method('shouldSkipClass')
            ->with($metadata, $context)
            ->will($this->returnValue(false));

        $last->expects($this->once())
            ->method('shouldSkipClass')
            ->with($metadata, $context)
            ->will($this->returnValue(true));

        $this->assertTrue($strat->shouldSkipClass($metadata, $context));
    }

    public function testShouldSkipClassReturnsFalseIfNoPredicateMatched()
    {
        $metadata = new ClassMetadata('stdClass');
        $context = SerializationContext::create();

        $strat = new DisjunctExclusionStrategy(array(
            $first = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
            $last = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
        ));

        $first->expects($this->once())
            ->method('shouldSkipClass')
            ->with($metadata, $context)
            ->will($this->returnValue(false));

        $last->expects($this->once())
            ->method('shouldSkipClass')
            ->with($metadata, $context)
            ->will($this->returnValue(false));

        $this->assertFalse($strat->shouldSkipClass($metadata, $context));
    }

    public function testShouldSkipPropertyShortCircuiting()
    {
        $metadata = new StaticPropertyMetadata('stdClass', 'foo', 'bar');
        $context = SerializationContext::create();

        $strat = new DisjunctExclusionStrategy(array(
            $first = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
            $last = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
        ));

        $first->expects($this->once())
            ->method('shouldSkipProperty')
            ->with($metadata, $context)
            ->will($this->returnValue(true));

        $last->expects($this->never())
            ->method('shouldSkipProperty');

        $this->assertTrue($strat->shouldSkipProperty($metadata, $context));
    }

    public function testShouldSkipPropertyDisjunct()
    {
        $metadata = new StaticPropertyMetadata('stdClass', 'foo', 'bar');
        $context = SerializationContext::create();

        $strat = new DisjunctExclusionStrategy(array(
            $first = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
            $last = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
        ));

        $first->expects($this->once())
            ->method('shouldSkipProperty')
            ->with($metadata, $context)
            ->will($this->returnValue(false));

        $last->expects($this->once())
            ->method('shouldSkipProperty')
            ->with($metadata, $context)
            ->will($this->returnValue(true));

        $this->assertTrue($strat->shouldSkipProperty($metadata, $context));
    }

    public function testShouldSkipPropertyReturnsFalseIfNoPredicateMatches()
    {
        $metadata = new StaticPropertyMetadata('stdClass', 'foo', 'bar');
        $context = SerializationContext::create();

        $strat = new DisjunctExclusionStrategy(array(
            $first = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
            $last = $this->createMock('JMS\Serializer\Exclusion\ExclusionStrategyInterface'),
        ));

        $first->expects($this->once())
            ->method('shouldSkipProperty')
            ->with($metadata, $context)
            ->will($this->returnValue(false));

        $last->expects($this->once())
            ->method('shouldSkipProperty')
            ->with($metadata, $context)
            ->will($this->returnValue(false));

        $this->assertFalse($strat->shouldSkipProperty($metadata, $context));
    }
}
