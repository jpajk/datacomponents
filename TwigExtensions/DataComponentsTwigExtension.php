<?php

namespace somatek\DataComponentsBundle\TwigExtensions;

use Twig_SimpleFunction;
use Twig_Extension;

use somatek\DataComponentsBundle\Core\ComponentFactory;

class DataComponentsTwigExtension extends Twig_Extension
{
    public function getComponent($component_name='', $data=array(), $options=array())
    {
        return ComponentFactory::instantiate($component_name, $data, $options);
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