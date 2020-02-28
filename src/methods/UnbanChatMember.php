<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to unban a previously kicked user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target group or username of the target supergroup or channel (in the format @username)
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#unbanchatmember
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class UnbanChatMember extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
