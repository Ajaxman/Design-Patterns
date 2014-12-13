<?php
namespace Jlopez\Design\Patterns\FactoryPattern;

/**
 * Class CardEvaluator
 * @package Jlopez\Design\Patterns\FactoryPattern
 */
class CardEvaluator
{
    /**
     * @var \Jlopez\Design\Patterns\FactoryPattern\CardEvaluatorFactory
     */
    private $cardEvaluatorFactory;

    private $cardNumber;

    public function __construct()
    {
        $this->cardEvaluatorFactory = new CardEvaluatorFactory();
    }

    /**
     * @return \Jlopez\Design\Patterns\FactoryPattern\CardEvaluatorFactory
     */
    public function getCardEvaluatorFactory()
    {
        return $this->cardEvaluatorFactory;
    }

    /**
     * @param string $cardNumber
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @return array
     */
    protected function getCardsNumber()
    {
        /** @var \Jlopez\Design\Patterns\FactoryPattern\Card $cardInstance */
        $cardsNumber = $this->getCardNumber();
        if (!is_array($cardsNumber)) {
            $cardsNumber = [$this->getCardNumber()];
        }
        return $cardsNumber;
    }

    public function getCardType()
    {
        $resultCards = [];

        foreach ($this->getCardsNumber() as $cardNumber) {
            $cardInstance = $this->getCardEvaluatorFactory()->evaluate($cardNumber);
            $cardName = $cardInstance->getName();
            $resultCards[] = [
                "cardNumber" => $cardNumber,
                "cardType" => $cardName,
            ];
        }

        return $resultCards;
    }
} 