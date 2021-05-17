<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Person::class);
$metadata->xmlRootName = 'child';

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\Person::class, 'name');
$pMetadata->setType('string');
$pMetadata->xmlValue = true;
$pMetadata->xmlElementCData = false;
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\Person::class, 'age');
$pMetadata->setType('integer');
$pMetadata->xmlAttribute = true;
$metadata->addPropertyMetadata($pMetadata);

return $metadata;
