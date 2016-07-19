<?php

namespace somatek\DataComponentsBundle\Components;

use Twig_Environment;
use somatek\DataComponentsBundle\Core\Component;

class GalleryComponent extends Component
{
    public function render(Twig_Environment $twig)
    {
        return $twig->render(
            'DataComponentsBundle:Gallery:Gallery.html.twig',
            [
                'component' => $this->getOptions()
            ]
        );
    }
}