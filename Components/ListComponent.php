<?php

namespace somatek\DataComponentsBundle\Components;

use Twig_Environment;
use somatek\DataComponentsBundle\Core\Component;

class ListComponent extends Component
{
    public function render(Twig_Environment $twig)
    {
        return $twig->render('DataComponentsBundle:List:List.html.twig');
    }
}