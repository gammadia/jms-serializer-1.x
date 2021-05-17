<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Price::class);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\Price::class, 'price');
$pMetadata->setType('float');
$pMetadata->xmlValue = true;
$metadata->addPropertyMetadata($pMetadata);

return $metadata;
