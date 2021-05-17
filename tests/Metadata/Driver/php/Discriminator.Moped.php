<?php

use JMS\Serializer\Metadata\ClassMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\Moped::class);

return $metadata;
