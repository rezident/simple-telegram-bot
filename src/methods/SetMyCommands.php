<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\BotCommand;

/**
 * Use this method to change the list of the bot's commands. Returns True on success.
 *
 * @method $this setCommands(BotCommand[] $commands) Required. A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setmycommands
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetMyCommands extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
