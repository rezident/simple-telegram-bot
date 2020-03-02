<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an Update with the field pre_checkout_query. Use this method to respond to such pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 *
 * @method $this setPreCheckoutQueryId(string $preCheckoutQueryId) Required. Unique identifier for the query to be answered
 * @method $this setOk(bool $ok) Required. Specify True if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use False if there are any problems.
 * @method $this setErrorMessage(string $errorMessage) Optional. Required if ok is False. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#answerprecheckoutquery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class AnswerPreCheckoutQuery extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
