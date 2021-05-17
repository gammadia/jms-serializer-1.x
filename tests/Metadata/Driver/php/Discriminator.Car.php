<?php

use JMS\Serializer\Metadata\ClassMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\Car::class);

return $metadata;
