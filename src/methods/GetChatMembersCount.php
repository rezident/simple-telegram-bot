<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\IntegerPrimitive;

/**
 * Use this method to get the number of members in a chat. Returns Int on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @method IntegerPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getchatmemberscount
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetChatMembersCount extends AbstractMethod
{
    protected $resultClass = IntegerPrimitive::class;
}
