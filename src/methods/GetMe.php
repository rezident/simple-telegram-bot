<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\User;

/**
 * A simple method for testing your bot's auth token. Requires no parameters. Returns basic information about the bot in form of a User object.
 *
 * @method User run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getme
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetMe extends AbstractMethod
{
    protected $resultClass = User::class;
}