<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\ShippingOption;

/**
 * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 *
 * @method $this setShippingQueryId(string $shippingQueryId) Required. Unique identifier for the query to be answered
 * @method $this setOk(bool $ok) Required. Specify True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
 * @method $this setShippingOptions(ShippingOption[] $shippingOptions) Optional. Required if ok is True. A JSON-serialized array of available shipping options.
 * @method $this setErrorMessage(string $errorMessage) Optional. Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#answershippingquery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class AnswerShippingQuery extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
