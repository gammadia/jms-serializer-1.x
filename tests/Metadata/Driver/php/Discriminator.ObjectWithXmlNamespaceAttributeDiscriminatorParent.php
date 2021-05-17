<?php

use JMS\Serializer\Metadata\ClassMetadata;

$metadata = new ClassMetadata(\JMS\Serializer\Tests\Fixtures\Discriminator\ObjectWithXmlNamespaceAttributeDiscriminatorParent::class);
$metadata->setDiscriminator('type', array(
    'child' => \JMS\Serializer\Tests\Fixtures\Discriminator\ObjectWithXmlNamespaceAttributeDiscriminatorChild::class
));
$metadata->xmlDiscriminatorAttribute = true;
$metadata->xmlDiscriminatorNamespace = 'http://example.com/';

return $metadata;
