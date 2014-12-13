<?php
namespace Jlopez\DesignPatterns\FactoryPattern\Card;

use Jlopez\DesignPatterns\FactoryPattern\Card;

/**
 * Class AmericanExpress
 * @package Jlopez\Design\Patterns\FactoryPattern\Card
 */
class AmericanExpress implements Card
{
    public function getName()
    {
        return "AmericanExpress";
    }

} 