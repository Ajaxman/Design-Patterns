<?php
namespace Jlopez\Design\Patterns\FactoryPattern\Card;

use Jlopez\Design\Patterns\FactoryPattern\Card;

/**
 * Class Visa
 * @package Jlopez\Design\Patterns\FactoryPattern\Card
 */
class Visa implements Card
{
    public function getName()
    {
        return "Visa";
    }
} 