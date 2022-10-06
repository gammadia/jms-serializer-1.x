<?php

namespace JMS\Serializer\Metadata;

use JMS\Serializer\Exception\ExpressionLanguageRequiredException;

/**
 * @Annotation
 * @Target("METHOD")
 *
 * @author Asmir Mustafic <goetas@gmail.com>
 */
class ExpressionPropertyMetadata extends PropertyMetadata
{
    /**
     * @var string
     */
    public $expression;

    public function __construct($class, $fieldName, $expression)
    {
        $this->class = $class;
        $this->name = $fieldName;
        $this->expression = $expression;
        $this->readOnly = true;
    }

    public function setAccessor($type, $getter = null, $setter = null)
    {
    }

    /**
     * @param object $object
     * @return mixed
     */
    public function getValue($object)
    {
        throw new ExpressionLanguageRequiredException(sprintf('The property %s on %s requires the expression accessor strategy to be enabled.', $this->name, $this->class));
    }

    public function setValue($obj, $value)
    {
        throw new \LogicException('ExpressionPropertyMetadata is immutable.');
    }

    public function __serialize(): array
    {
        return [
            $this->expression,
            $this->class,
            $this->name,
            serialize(parent::__serialize())
        ];
    }

    public function __unserialize(array $data): void
    {
        [$this->expression,$this->class,$this->name, $parentStr] = $data;
        parent::unserializeProperties($parentStr);
    }

    protected function unserializeProperties($str)
    {
        list(
            $this->expression,
            $parentStr
            ) = unserialize($str);
        return parent::unserializeProperties($parentStr);
    }
}
