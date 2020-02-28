<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\Chat;

/**
 * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @method Chat run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getchat
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetChat extends AbstractMethod
{
    protected $resultClass = Chat::class;
}
