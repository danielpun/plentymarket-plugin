<?php
namespace Cvpa\Providers;

use Plenty\Plugin\Templates\Twig;


class IconProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('CeevoPayment::Icon');
    }

}