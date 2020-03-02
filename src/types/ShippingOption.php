<?php

namespace TelegramBot\types;

/**
 * This object represents one shipping option.
 *
 * @method string getId Shipping option identifier
 * @method string getTitle Option title
 * @method LabeledPrice[] getPrices List of price portions
 *
 * @method $this setId(string $id) Shipping option identifier
 * @method $this setTitle(string $title) Option title
 * @method $this setPrices(LabeledPrice[] $prices) List of price portions
 *
 * @url https://core.telegram.org/bots/api#shippingoption
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ShippingOption extends AbstractType
{

}
