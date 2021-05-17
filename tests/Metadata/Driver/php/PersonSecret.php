<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\PersonSecret::class);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\PersonSecret::class, 'name');
$pMetadata->setType('string');
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\PersonSecret::class, 'gender');
$pMetadata->setType('string');
$pMetadata->excludeIf = "show_data('gender')";
$metadata->addPropertyMetadata($pMetadata);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\PersonSecret::class, 'age');
$pMetadata->setType('string');
$pMetadata->excludeIf = "!(show_data('age'))";
$metadata->addPropertyMetadata($pMetadata);

return $metadata;
