<?php

namespace somatek\DataComponentsBundle\Core;

use somatek\DataComponentsBundle\Components\ListComponent;

class ComponentFactory
{
    public static function instantiate($component_name='', $data=array(), $options=array())
    {
        return new $component_name($data, $options);
    }
}