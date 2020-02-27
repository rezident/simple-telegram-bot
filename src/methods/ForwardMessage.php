<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\Message;

/**
 * Use this method to forward messages of any kind. On success, the sent Message is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setFromChatId(int|string $fromChatId) Required. Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setMessageId(int $messageId) Required. Message identifier in the chat specified in from_chat_id
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#forwardmessage
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ForwardMessage extends AbstractMethod
{
    protected $resultClass = Message::class;
}
