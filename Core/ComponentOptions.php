<?php

namespace somatek\DataComponentsBundle\Core;

use Symfony\Component\OptionsResolver\OptionsResolver;

class ComponentOptions
{
    private static $available_components = [
        'list'
    ];

    private static $allowed_types = [
        'component_name'    => 'string',
        'id-component'      => 'string',
        'class-component'   => 'string'
    ];

    /**
     * @var array
     */
    private $options;

    /**
     * @var array
     */
    private $defaults = [
        'id-component'      => 'id-component',
        'class-component'   => 'class-component'
    ];

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getDefaults()
    {
        return $this->defaults;
    }

    /**
     * @param array $defaults
     */
    public function setDefaults(array $defaults)
    {
        $this->defaults = $defaults;
    }

    public function resolveOptions(array $options=[])
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired(['component_name', 'data']);
        $resolver->setDefaults($this->getDefaults());

        foreach (self::$allowed_types as $type => $value) {
            $resolver->setAllowedTypes($type, $value);
        }

        $resolver->setAllowedValues('component_name', self::$available_components);

        $resolved = $resolver->resolve($options);
        $this->setOptions($resolved);
    }
}