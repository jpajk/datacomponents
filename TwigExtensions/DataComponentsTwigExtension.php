<?php

namespace somatek\DataComponentsBundle\TwigExtensions;

use Twig_SimpleFunction;
use Twig_Extension;
use Twig_Environment;

use somatek\DataComponentsBundle\Core\ComponentFactory;

class DataComponentsTwigExtension extends Twig_Extension
{
    public function getComponent(Twig_Environment $twig, $options)
    {
        return ComponentFactory::instantiate($twig, $options);
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction(
                'datacomponent',
                array($this, 'getComponent'),
                array('is_safe' => array('all'),
                'needs_environment' => true)
            ),
        );
    }

    public function getName()
    {
        return self::class;
    }
}