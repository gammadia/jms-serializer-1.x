<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\Vehicle::class);
$metadata->setDiscriminator('type', array(
    'car' => \JMS\Serializer\Tests\Fixtures\Discriminator\Car::class,
    'moped' => \JMS\Serializer\Tests\Fixtures\Discriminator\Moped::class,
));

$km = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\Vehicle::class, 'km');
$km->setType('integer');
$metadata->addPropertyMetadata($km);

return $metadata;
