<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 * @method $this setCustomTitle(string $customTitle) Required. New custom title for the administrator; 0-16 characters, emoji are not allowed
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setchatadministratorcustomtitle
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetChatAdministratorCustomTitle extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
