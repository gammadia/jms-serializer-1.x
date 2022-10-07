<?php

namespace JMS\Serializer\Tests\Fixtures;

use ArrayIterator;
use JMS\Serializer\Annotation as Serializer;
use ReturnTypeWillChange;

/**
 * An array-acting object that holds many author instances.
 */
class AuthorList implements \IteratorAggregate, \Countable, \ArrayAccess
{
    /**
     * @Serializer\Type("array<JMS\Serializer\Tests\Fixtures\Author>")
     * @var array
     */
    protected $authors = array();

    /**
     * @param Author $author
     */
    public function add(Author $author)
    {
        $this->authors[] = $author;
    }

    /**
     * @see IteratorAggregate
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->authors);
    }

    /**
     * @see Countable
     */
    public function count(): int
    {
        return count($this->authors);
    }

    /**
     * @see ArrayAccess
     */
    public function offsetExists($offset): bool
    {
        return isset($this->authors[$offset]);
    }

    /**
     * @see ArrayAccess
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->authors[$offset]) ? $this->authors[$offset] : null;
    }

    /**
     * @see ArrayAccess
     */
    public function offsetSet($offset, $value): void
    {
        if (null === $offset) {
            $this->authors[] = $value;
        } else {
            $this->authors[$offset] = $value;
        }
    }

    /**
     * @see ArrayAccess
     */
    public function offsetUnset($offset): void
    {
        unset($this->authors[$offset]);
    }

}
