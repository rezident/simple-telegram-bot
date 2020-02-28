<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\Boolean;

/**
 * Use this method to kick a user from a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the group on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 * @method $this setUntilDate(int $untilDate) Optional. Date when the user will be unbanned, unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever
 *
 * @method Boolean run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#kickchatmember
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class KickChatMember extends AbstractMethod
{
    protected $resultClass = Boolean::class;
}
