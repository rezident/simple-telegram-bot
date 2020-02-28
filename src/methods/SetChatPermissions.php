<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\ChatPermissions;

/**
 * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members admin rights. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @method $this setPermissions(ChatPermissions $permissions) Required. New default chat permissions
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setchatpermissions
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetChatPermissions extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
