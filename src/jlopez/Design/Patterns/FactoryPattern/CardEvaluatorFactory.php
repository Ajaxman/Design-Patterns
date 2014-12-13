<?php
namespace Jlopez\Design\Patterns\FactoryPattern;

use Jlopez\Design\Patterns\FactoryPattern\Card\AmericanExpress;
use Jlopez\Design\Patterns\FactoryPattern\Card\JBC;
use Jlopez\Design\Patterns\FactoryPattern\Card\MasterCard;
use Jlopez\Design\Patterns\FactoryPattern\Card\Visa;

/**
 * Class CardEvaluatorFactory
 * @package Jlopez\Design\Patterns\FactoryPattern
 */
class CardEvaluatorFactory
{

    const CARD_VISA = "/^4[0-9]{6,}$/";

    const CARD_MASTER_CARD = "/^5[1-5][0-9]{5,}$/";

    const CARD_AMERICAN_EXPRESS = "/^3[47][0-9]{5,}$/";

    const CARD_DISCOVER  = "/^6(?:011|5[0-9]{2})[0-9]{3,}$/";

    const CARD_JBC = "/^(?:2131|1800|35[0-9]{3})[0-9]{3,}$/";

    const CARD_DINERS_CLUB = "/^3(?:0[0-5]|[68][0-9])[0-9]{4,}$/";

    /**
     * @param $cardNumber
     * @return AmericanExpress|MasterCard|Visa|null
     */
    public function evaluate($cardNumber)
    {
        $cardInstance = null;
        switch ($cardNumber) {
            case preg_match(self::CARD_VISA,$cardNumber)?true:false:
                $cardInstance = new Visa();
                break;

            case preg_match(self::CARD_MASTER_CARD,$cardNumber)?true:false:
                $cardInstance = new MasterCard();
                break;

            case preg_match(self::CARD_AMERICAN_EXPRESS,$cardNumber)?true:false:
                $cardInstance = new AmericanExpress();
                break;

            case preg_match(self::CARD_JBC,$cardNumber)?true:false:
                $cardInstance = new JBC();
                break;

            default:
                throw new \InvalidArgumentException("The card give us is invalid, plase try again");
        }
        return $cardInstance;
    }
} 