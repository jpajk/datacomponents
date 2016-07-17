<?php

namespace somatek\DataComponentsBundle\TwigExtensions;

use Twig_SimpleFunction;
use Twig_Extension;

use somatek\DataComponentsBundle\Core\ComponentFactory;

class DataComponentsTwigExtension extends Twig_Extension
{
    public function getComponent($twig, $data=array(), $options=array())
    {
        return ComponentFactory::instantiate($twig, $data, $options);
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('datacomponent', array($this, 'getComponent'), array('is_safe' => array('all'), 'needs_environment' => true)),
        );
    }

    public function getName()
    {
        return self::class;
    }
}