<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\WebhookInfo;

/**
 * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
 *
 * @method WebhookInfo run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getwebhookinfo
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetWebhookInfo extends AbstractMethod
{
    protected $resultClass = WebhookInfo::class;
}
