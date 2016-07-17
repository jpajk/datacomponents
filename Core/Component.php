<?php

namespace somatek\DataComponentsBundle\Core;

abstract class Component
{
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
}