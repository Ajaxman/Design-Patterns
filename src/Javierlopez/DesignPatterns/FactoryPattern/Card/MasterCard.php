<?php
namespace Jlopez\DesignPatterns\FactoryPattern\Card;

use Jlopez\DesignPatterns\FactoryPattern\Card;

/**
 * Class MasterCard
 * @package Jlopez\DesignPatterns\FactoryPattern\Card
 */
class MasterCard implements Card
{
    public function getName()
    {
        return "MasterCard";
    }
} 