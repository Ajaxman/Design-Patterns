<?php
namespace Jlopez\Design\Patterns\FactoryPattern\Card;

use Jlopez\Design\Patterns\FactoryPattern\Card;

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