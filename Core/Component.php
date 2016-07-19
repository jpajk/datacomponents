<?php

namespace somatek\DataComponentsBundle\Core;

abstract class Component
{
    /**
     * Component options
     * @var array
     */
    private $options;

    /**
     * Data to be set for the component
     * @var array
     */
    private $data;

    /**
     * @return ComponentOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param ComponentOptions $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}