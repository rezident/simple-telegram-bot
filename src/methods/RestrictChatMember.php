<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\ChatPermissions;

/**
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate admin rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 * @method $this setPermissions(ChatPermissions $permissions) Required. New user permissions
 * @method $this setUntilDate(int $untilDate) Optional. Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#restrictchatmember
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class RestrictChatMember extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
