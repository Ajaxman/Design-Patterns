<?php
namespace Jlopez\DesignPatterns\FactoryPattern;

/**
 * Class CardEvaluator
 * @package Jlopez\DesignPatterns\FactoryPattern
 */
class CardEvaluator
{
    /**
     * @var \Jlopez\DesignPatterns\FactoryPattern\CardEvaluatorFactory
     */
    private $cardEvaluatorFactory;

    private $cardNumber;

    public function __construct(CardEvaluatorFactory $cardEvaluatorFactory)
    {
        $this->cardEvaluatorFactory = $cardEvaluatorFactory;
    }

    /**
     * @return \Jlopez\DesignPatterns\FactoryPattern\CardEvaluatorFactory
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
        /** @var \Jlopez\DesignPatterns\FactoryPattern\Card $cardInstance */
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