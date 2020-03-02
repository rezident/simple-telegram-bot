<?php

namespace TelegramBot\types;

/**
 * This object represents a portion of the price for goods or services.
 *
 * @method string getLabel Portion label
 * @method int getAmount Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @method $this setLabel(string $label) Portion label
 * @method $this setAmount(int $amount) Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 *
 * @url https://core.telegram.org/bots/api#labeledprice
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class LabeledPrice extends AbstractType
{

}
