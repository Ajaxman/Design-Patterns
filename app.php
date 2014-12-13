<?php
require 'vendor/autoload.php';

use Jlopez\Design\Patterns\FactoryPattern\CardEvaluator;


$cardEvaluator = new CardEvaluator();
$cardEvaluator->setCardNumber(['4916338506082832','5280934283171080','3528000000000000','345936346788903']);
print_r($cardEvaluator->getCardType());

