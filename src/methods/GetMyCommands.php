<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BotCommand;

/**
 * Use this method to get the current list of the bot's commands. Requires no parameters. Returns Array of BotCommand on success.
 *
 * @method BotCommand[] run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getmycommands
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetMyCommands extends AbstractMethod
{
    protected $resultClass = BotCommand::class;

    protected $resultIsArray = true;
}
