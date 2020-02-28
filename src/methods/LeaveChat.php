<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#leavechat
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class LeaveChat extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
