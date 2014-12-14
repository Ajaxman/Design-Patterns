<?php
namespace Jlopez\DesignPatterns\FactoryPattern;

use Jlopez\DesignPatterns\FactoryPattern\CardEvaluator;

class CardEvaluatorTest extends \PHPUnit_Framework_TestCase
{

    public function getMockCardEvaluatorFactory()
    {
        /** @var  \Jlopez\DesignPatterns\FactoryPattern\CardEvaluatorFactory $cardEvaluatorFactoryMock */
        return $this
            ->getMockBuilder('Jlopez\DesignPatterns\FactoryPattern\CardEvaluatorFactory')
            ->setMethods(['getName'])
            ->getMock();
    }

    /**
     * @return CardEvaluator
     */
    public function getCardEvaluatorObject()
    {
        return new CardEvaluator($this->getMockCardEvaluatorFactory());
    }

    public function testCardEvaluatorFactoryExists()
    {
        $cardEvaluatorFactoryMock = $this->getCardEvaluatorObject()->getCardEvaluatorFactory();
        $this->assertTrue($cardEvaluatorFactoryMock instanceof CardEvaluatorFactory);
    }

    public function testSetNumberCardsAndReceiveInstance()
    {
        $evaluatorCard = $this->getCardEvaluatorObject();
        $evaluatorCardInstance = $evaluatorCard->setCardNumber(1);
        $this->assertTrue($evaluatorCardInstance instanceof CardEvaluator);
    }



    public function testCheckVariousCardsTypes()
    {

        $evaluatorCard = $this->getCardEvaluatorObject();
        $evaluatorCard->setCardNumber(['4916338506082832','5280934283171080','3528000000000000','345936346788903']);
        $cardsTypes = $evaluatorCard->getCardType();

        $this->assertEquals([
            ['cardNumber' => '4916338506082832', 'cardType' => 'Visa'],
            ['cardNumber' => '5280934283171080', 'cardType' => 'MasterCard'],
            ['cardNumber' => '3528000000000000', 'cardType' => 'JBC'],
            ['cardNumber' => '345936346788903', 'cardType' => 'AmericanExpress'],
        ], $cardsTypes);

    }

    public function testOnlyCardType()
    {
        $evaluatorCard = $this->getCardEvaluatorObject();
        $evaluatorCard->setCardNumber('4916338506082832');
        $cardsTypes = $evaluatorCard->getCardType();
        $this->assertEquals([['cardNumber' => '4916338506082832', 'cardType' => 'Visa']], $cardsTypes);
    }

} 