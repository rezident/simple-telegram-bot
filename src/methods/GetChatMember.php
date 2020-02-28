<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\ChatMember;

/**
 * Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 *
 * @method ChatMember run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getchatmember
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetChatMember extends AbstractMethod
{
    protected $resultClass = ChatMember::class;
}
