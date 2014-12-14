<?php
namespace Jlopez\DesignPatterns\FactoryPattern\Card;

use Jlopez\DesignPatterns\FactoryPattern\Card;

/**
 * Class JBC
 * @package Jlopez\DesignPatterns\FactoryPattern\Card
 */
class JBC implements Card
{
    public function getName()
    {
        return "JBC";
    }
} 