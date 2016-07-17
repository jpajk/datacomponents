<?php
/**
 * Created by PhpStorm.
 * User: alecto
 * Date: 7/17/16
 * Time: 9:37 AM
 */

namespace somatek\datacomponents\Core;


class ComponentFactory
{
    public function instantiate($class_name)
    {
        return new ($class_name)();
    }
}