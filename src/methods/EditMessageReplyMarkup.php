<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;

/**
 * Use this method to edit only the reply markup of messages. On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
 *
 * @method $this setChatId(int|string $chatId) Optional. Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMessageId(int $messageId) Optional. Required if inline_message_id is not specified. Identifier of the message to edit
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Required if chat_id and message_id are not specified. Identifier of the inline message
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for an inline keyboard.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#editmessagereplymarkup
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class EditMessageReplyMarkup extends AbstractMethod
{
    protected $resultClass = Message::class;
}
