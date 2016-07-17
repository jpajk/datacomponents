<?php
/**
 * Created by PhpStorm.
 * User: alecto
 * Date: 7/17/16
 * Time: 9:37 AM
 */

namespace somatek\datacomponents\Core;

use somatek\datacomponents\Components\ListComponent;

class ComponentFactory
{
    public static function instantiate($component_name='', $data=array(), $options=array())
    {
        return new $component_name($data, $options);
    }
}