<?php

namespace JMS\Serializer\Metadata;

class StaticPropertyMetadata extends PropertyMetadata
{
    private $value;

    public function __construct($className, $fieldName, $fieldValue, array $groups = array())
    {
        $this->class = $className;
        $this->name = $fieldName;
        $this->value = $fieldValue;
        $this->readOnly = true;
        $this->groups = $groups;
    }

    public function getValue($obj)
    {
        return $this->value;
    }

    public function setValue($obj, $value)
    {
        throw new \LogicException('StaticPropertyMetadata is immutable.');
    }

    public function setAccessor($type, $getter = null, $setter = null)
    {
    }

    public function __serialize(): array
    {
        return [
            $this->value,
            $this->class,
            $this->name,
            serialize(parent::__serialize())
        ];
    }

    public function __unserialize(array $data): void
    {
        [$this->value, $this->class, $this->name, $parentStr] = $data;
        parent::unserializeProperties($parentStr);
    }
}
