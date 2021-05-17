<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\ExpressionPropertyMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\Metadata\VirtualPropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\AuthorExpressionAccess::class);

$p = new ExpressionPropertyMetadata(\JMS\Serializer\Tests\Fixtures\AuthorExpressionAccess::class, 'firstName', 'object.getFirstName()');
$metadata->addPropertyMetadata($p);

$p = new VirtualPropertyMetadata(\JMS\Serializer\Tests\Fixtures\AuthorExpressionAccess::class, 'getLastName');
$metadata->addPropertyMetadata($p);

$p = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\AuthorExpressionAccess::class, 'id');
$metadata->addPropertyMetadata($p);

return $metadata;
