<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to unpin a message in a group, a supergroup, or a channel. The bot must be an administrator in the chat for this to work and must have the ‘can_pin_messages’ admin right in the supergroup or ‘can_edit_messages’ admin right in the channel. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#unpinchatmessage
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class UnpinChatMessage extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
