<?php

namespace Jlopez\DesignPatterns\FactoryPattern;

use Jlopez\DesignPatterns\FactoryPattern\CardEvaluator;

/**
 * Class CardEvaluatorFactoryTest
 * @package Jlopez\DesignPatterns\FactoryPattern
 */
class CardEvaluatorFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return array
     */
    public function cardsDataProvider()
    {
        return [
            ['4916338506082832', 'Visa'],
            ['5280934283171080', 'MasterCard'],
            ['3528000000000000', 'JBC'],
            ['345936346788903', 'AmericanExpress'],
        ];
    }

    /**
     * @dataProvider cardsDataProvider
     * @param $input
     * @param $expected
     */
    public function testGetCardsTypes($input, $expected)
    {
        $cardEvaluatorFactory = new CardEvaluatorFactory();
        $cardEvaluationType = $cardEvaluatorFactory->evaluate($input);
        $this->assertEquals($expected, $cardEvaluationType->getName());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        $cardEvaluatorFactory = new CardEvaluatorFactory();
        $cardEvaluatorFactory->evaluate(1);
    }
} 