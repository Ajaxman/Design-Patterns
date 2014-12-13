<?php
namespace Jlopez\DesignPatterns\FactoryPattern\Card;

use Jlopez\DesignPatterns\FactoryPattern\Card;

/**
 * Class Visa
 * @package Jlopez\DesignPatterns\FactoryPattern\Card
 */
class Visa implements Card
{
    public function getName()
    {
        return "Visa";
    }
} 