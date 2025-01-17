<?php

namespace JMS\Serializer\Tests\Fixtures;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("test-object", namespace="http://example.com/namespace")
 * @XmlNamespace(uri="http://example.com/namespace")
 * @XmlNamespace(uri="http://schemas.google.com/g/2005", prefix="gd")
 * @XmlNamespace(uri="http://www.w3.org/2005/Atom", prefix="atom")
 */
class ObjectWithXmlNamespaces
{
    /**
     * @Type("string")
     * @XmlElement(namespace="http://purl.org/dc/elements/1.1/");
     */
    public $title;

    /**
     * @Type("DateTime")
     * @XmlAttribute
     */
    public $createdAt;

    /**
     * @Type("string")
     * @XmlAttribute(namespace="http://schemas.google.com/g/2005")
     */
    public $etag;

    /**
     * @Type("string")
     * @XmlElement(namespace="http://www.w3.org/2005/Atom")
     */
    public $author;

    /**
     * @Type("string")
     * @XmlAttribute(namespace="http://purl.org/dc/elements/1.1/");
     */
    public $language;

    public function __construct($title, $author, \DateTime $createdAt, $language)
    {
        $this->title = $title;
        $this->author = $author;
        $this->createdAt = $createdAt;
        $this->language = $language;
        $this->etag = sha1($this->createdAt->format(\DateTime::ISO8601));
    }
}
