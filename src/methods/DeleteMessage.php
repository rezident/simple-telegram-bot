<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to delete a message, including service messages, with the following limitations:
 * - A message can only be deleted if it was sent less than 48 hours ago.
 * - Bots can delete outgoing messages in private chats, groups, and supergroups.
 * - Bots can delete incoming messages in private chats.
 * - Bots granted can_post_messages permissions can delete outgoing messages in channels.
 * - If the bot is an administrator of a group, it can delete any message there.
 * - If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.
 * Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMessageId(int $messageId) Required. Identifier of the message to delete
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#deletemessage
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class DeleteMessage extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
