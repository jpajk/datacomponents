<?php

namespace somatek\DataComponentsBundle\Core;

use somatek\DataComponentsBundle\Components\ListComponent;

class ComponentFactory
{
    public static function instantiate($twig, $data=array(), $options=array())
    {
        $component =  new ListComponent($twig, $options);

        return $component->render($twig);
    }
}