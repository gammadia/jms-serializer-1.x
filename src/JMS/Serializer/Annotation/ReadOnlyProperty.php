<?php

namespace JMS\Serializer\Annotation;

/**
 * @Annotation
 * @Target({"CLASS","PROPERTY"})
 *
 * @final
 */
/* final */ class ReadOnlyProperty
{
    /**
     * @var boolean
     */
    public $readOnly = true;
}
