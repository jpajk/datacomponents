<?php

namespace somatek\datacomponents\Core;

abstract class Component
{
    /**
     * Path for the component's template
     */
    const TEMPLATE_PATH = '';

    /**
     * Data to be set for the component
     * @var array
     */
    private $data;

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

    public function render()
    {

    }
}