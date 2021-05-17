<?php

use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\Post::class);
$metadata->setDiscriminator('type', array(
    'post' => \JMS\Serializer\Tests\Fixtures\Discriminator\Post::class,
    'image_post' => \JMS\Serializer\Tests\Fixtures\Discriminator\ImagePost::class,
));

$title = new PropertyMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\Post::class, 'title');
$title->setType('string');
$metadata->addPropertyMetadata($title);

return $metadata;
