<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\SimpleSubClassObject::class);

$metadata->registerNamespace('http://better.foo.example.org', 'foo');
$metadata->registerNamespace('http://foo.example.org', 'old_foo');

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\SimpleSubClassObject::class, 'moo');
$pMetadata->setType('string');
$pMetadata->xmlNamespace = "http://better.foo.example.org";
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\SimpleSubClassObject::class, 'baz');
$pMetadata->setType('string');
$pMetadata->xmlNamespace = "http://foo.example.org";
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\SimpleSubClassObject::class, 'qux');
$pMetadata->setType('string');
$pMetadata->xmlNamespace = "http://new.foo.example.org";
$metadata->addPropertyMetadata($pMetadata);

return $metadata;
