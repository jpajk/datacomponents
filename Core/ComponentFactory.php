<?php

namespace somatek\DataComponentsBundle\Core;

use Twig_Environment;

use somatek\DataComponentsBundle\Components\ListComponent;
use somatek\DataComponentsBundle\Core\ComponentOptions;

class ComponentFactory
{
    protected static function getAvailableComponents()
    {
        return [
            'list' => new ListComponent()
        ];
    }

    public static function instantiate(Twig_Environment $twig, $options)
    {
        $component_options = new ComponentOptions();
        $component_options->resolveOptions($options);

        $options_array = $component_options->getOptions();
        $component_list = self::getAvailableComponents();

        $component = $component_list[$options_array['component_name']];
        $component->setOptions($options_array);
        $component->setData($options_array['data']);

        return $component->render($twig);
    }
}