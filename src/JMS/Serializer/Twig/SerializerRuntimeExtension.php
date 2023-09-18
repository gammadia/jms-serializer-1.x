<?php

namespace JMS\Serializer\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * @author Asmir Mustafic <goetas@gmail.com>
 */
final class SerializerRuntimeExtension extends AbstractExtension
{

    public function getName()
    {
        return 'jms_serializer';
    }

    public function getFilters()
    {
        return array(
            new TwigFilter('serialize', array(SerializerRuntimeHelper::class, 'serialize')),
        );
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('serialization_context', '\JMS\Serializer\SerializationContext::create'),
        );
    }
}
