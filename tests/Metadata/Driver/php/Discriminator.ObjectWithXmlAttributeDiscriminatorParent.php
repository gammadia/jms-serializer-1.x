<?php

use JMS\Serializer\Metadata\ClassMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\ObjectWithXmlAttributeDiscriminatorParent::class);
$metadata->setDiscriminator('type', array(
    'child' => \JMS\Serializer\Tests\Fixtures\Discriminator\ObjectWithXmlAttributeDiscriminatorChild::class
));
$metadata->xmlDiscriminatorAttribute = true;
$metadata->xmlDiscriminatorCData = false;
return $metadata;
