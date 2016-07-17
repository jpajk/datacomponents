<?php

namespace somatek\datacomponents\TwigExtensions;

use Twig_SimpleFunction;
use somatek\datacomponents\Core\ComponentFactory;

class DatComponentsTwigExtension
{
    public function getComponent($component_name='', $data=array(), $options=array())
    {
        return ComponentFactory::instantiate($component_name, $data);
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction('datacomponent', array($this, 'getComponent'), array('is_safe' => array('all'), 'needs_environment' => true)),
        );
    }
}