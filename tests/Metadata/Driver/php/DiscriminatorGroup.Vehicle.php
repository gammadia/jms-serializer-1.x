<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\DiscriminatorGroup\Vehicle::class);
$metadata->setDiscriminator('type', array(
    'car' => \JMS\Serializer\Tests\Fixtures\DiscriminatorGroup\Car::class,
), array('foo'));

$km = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\DiscriminatorGroup\Vehicle::class, 'km');
$km->setType('integer');
$metadata->addPropertyMetadata($km);

return $metadata;
