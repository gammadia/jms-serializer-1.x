<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Node::class);

$pMetadata = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\Node::class, 'children');
$pMetadata->maxDepth = 2;
$metadata->addPropertyMetadata($pMetadata);

return $metadata;
