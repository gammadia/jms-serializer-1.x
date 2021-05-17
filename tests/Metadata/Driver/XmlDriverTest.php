<?php

namespace JMS\Serializer\Tests\Metadata\Driver;

use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;
use JMS\Serializer\Metadata\Driver\XmlDriver;
use JMS\Serializer\Metadata\PropertyMetadata;
use Metadata\Driver\FileLocator;

class XmlDriverTest extends BaseDriverTest
{
    use ArraySubsetAsserts;

    public function testInvalidXml()
    {
        $this->expectException(\JMS\Serializer\Exception\XmlErrorException::class);
        $this->expectExceptionMessage('[FATAL] Start tag expected, \'<\' not found');
        $driver = $this->getDriver();

        $ref = new \ReflectionMethod($driver, 'loadMetadataFromFile');
        $ref->setAccessible(true);
        $ref->invoke($driver, new \ReflectionClass(\stdClass::class), __DIR__ . '/xml/invalid.xml');
    }

    public function testBlogPostExcludeAllStrategy()
    {
        $m = $this->getDriver('exclude_all')->loadMetadataForClass(new \ReflectionClass(\JMS\Serializer\Tests\Fixtures\BlogPost::class));

        $this->assertArrayHasKey('title', $m->propertyMetadata);

        $excluded = array('createdAt', 'published', 'comments', 'author');
        foreach ($excluded as $key) {
            $this->assertArrayNotHasKey($key, $m->propertyMetadata);
        }
    }

    public function testBlogPostExcludeNoneStrategy()
    {
        $m = $this->getDriver('exclude_none')->loadMetadataForClass(new \ReflectionClass(\JMS\Serializer\Tests\Fixtures\BlogPost::class));

        $this->assertArrayNotHasKey('title', $m->propertyMetadata);

        $excluded = array('createdAt', 'published', 'comments', 'author');
        foreach ($excluded as $key) {
            $this->assertArrayHasKey($key, $m->propertyMetadata);
        }
    }

    public function testBlogPostCaseInsensitive()
    {
        $m = $this->getDriver('case')->loadMetadataForClass(new \ReflectionClass(\JMS\Serializer\Tests\Fixtures\BlogPost::class));

        $p = new PropertyMetadata($m->name, 'title');
        $p->type = array('name' => 'string', 'params' => array());
        $this->assertEquals($p, $m->propertyMetadata['title']);
    }

    public function testAccessorAttributes()
    {
        $m = $this->getDriver()->loadMetadataForClass(new \ReflectionClass(\JMS\Serializer\Tests\Fixtures\GetSetObject::class));

        $p = new PropertyMetadata($m->name, 'name');
        $p->type = array('name' => 'string', 'params' => array());
        $p->getter = 'getTrimmedName';
        $p->setter = 'setCapitalizedName';

        $this->assertEquals($p, $m->propertyMetadata['name']);
    }

    public function testGroupsTrim()
    {
        $first = $this->getDriver()->loadMetadataForClass(new \ReflectionClass(\JMS\Serializer\Tests\Fixtures\GroupsTrim::class));

        $this->assertArrayHasKey('amount', $first->propertyMetadata);
        $this->assertArraySubset(['first.test.group', 'second.test.group'], $first->propertyMetadata['currency']->groups);
    }

    public function testMultilineGroups()
    {
        $first = $this->getDriver()->loadMetadataForClass(new \ReflectionClass(\JMS\Serializer\Tests\Fixtures\MultilineGroupsFormat::class));

        $this->assertArrayHasKey('amount', $first->propertyMetadata);
        $this->assertArraySubset(['first.test.group', 'second.test.group'], $first->propertyMetadata['currency']->groups);
    }

    protected function getDriver()
    {
        $append = '';
        if (func_num_args() == 1) {
            $append = '/' . func_get_arg(0);
        }

        return new XmlDriver(new FileLocator(array(
            'JMS\Serializer\Tests\Fixtures' => __DIR__ . '/xml' . $append,
        )));
    }
}
