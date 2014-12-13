<?php
namespace Jlopez\Design\Patterns\FactoryPattern\Card;

use Jlopez\Design\Patterns\FactoryPattern\Card;

/**
 * Class MasterCard
 * @package Jlopez\Design\Patterns\FactoryPattern\Card
 */
class MasterCard implements Card
{
    public function getName()
    {
        return "MasterCard";
    }
} 