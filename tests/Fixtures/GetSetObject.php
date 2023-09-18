<?php

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\ReadOnlyProperty;
use JMS\Serializer\Annotation\Type;

/** @AccessType("public_method") */
class GetSetObject
{
    /** @AccessType("property") @Type("integer") */
    public $id = 1;

    /** @Type("string") */
    public $name = 'Foo';

    /**
     * @ReadOnlyProperty
     */
    public $readOnlyProperty = 42;

    /**
     * This property should be exlcluded
     * @Exclude()
     */
    public $excludedProperty;

    public function getId()
    {
        throw new \RuntimeException('This should not be called.');
    }

    public function getName()
    {
        return 'Johannes';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getReadOnlyProperty()
    {
        return $this->readOnlyProperty;
    }
}
