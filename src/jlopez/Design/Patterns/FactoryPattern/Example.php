<?php

namespace Jlopez\Design\Patterns\FactoryPattern;

/*
class Example
{

}
*/
$cardEvaluator = new CardEvaluator();
$cardEvaluator->setCardNumber(1111);
echo $cardEvaluator->getCardType();

