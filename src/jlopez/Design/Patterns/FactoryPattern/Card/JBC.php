<?php
namespace Jlopez\Design\Patterns\FactoryPattern\Card;

use Jlopez\Design\Patterns\FactoryPattern\Card;

/**
 * Class JBC
 * @package Jlopez\Design\Patterns\FactoryPattern\Card
 */
class JBC implements Card
{
    public function getName()
    {
        return "JBC";
    }
} 