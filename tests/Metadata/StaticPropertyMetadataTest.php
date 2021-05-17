<?php

namespace JMS\Serializer\Tests\Metadata;

use JMS\Serializer\Metadata\StaticPropertyMetadata;

class StaticPropertyMetadataTest extends AbstractPropertyMetadataTest
{
    public function testSerialization()
    {
        $meta = new StaticPropertyMetadata(\stdClass::class, 'foo', 'fooVal');
        $this->setNonDefaultMetadataValues($meta);

        $restoredMeta = unserialize(serialize($meta));
        $this->assertEquals($meta, $restoredMeta);
    }
}
