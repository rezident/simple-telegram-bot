<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success. Requires no parameters.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#deletewebhook
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class DeleteWebhook extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
