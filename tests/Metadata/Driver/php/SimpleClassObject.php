<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\SimpleClassObject::class);

$metadata->registerNamespace('http://foo.example.org', 'foo');
$metadata->registerNamespace('http://old.foo.example.org', 'old_foo');
$metadata->registerNamespace('http://new.foo.example.org', 'new_foo');

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\SimpleClassObject::class, 'foo');
$pMetadata->setType('string');
$pMetadata->xmlNamespace = "http://old.foo.example.org";
$pMetadata->xmlAttribute = true;
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\SimpleClassObject::class, 'bar');
$pMetadata->setType('string');
$pMetadata->xmlNamespace = "http://foo.example.org";
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\SimpleClassObject::class, 'moo');
$pMetadata->setType('string');
$pMetadata->xmlNamespace = "http://new.foo.example.org";
$metadata->addPropertyMetadata($pMetadata);

return $metadata;
