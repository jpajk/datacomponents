<?php

namespace somatek\DataComponentsBundle\Core;

use somatek\DataComponentsBundle\Components\ListComponent;
use somatek\DataComponentsBundle\Core\ComponentOptions;

class ComponentFactory
{
    public static function instantiate($twig, $component_name='', $data=array(), $options=array())
    {
        $components        = self::getComponents();

        $component         = $components[$component_name];
        $component_options = new ComponentOptions();

        $component_options->resolveOptions($options);

        $component->setData($data);
        $component->setOptions($component_options);

        return $component->render($twig);
    }
}