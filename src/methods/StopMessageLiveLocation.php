<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;

/**
 * Use this method to stop updating a live location message before live_period expires. On success, if the message was sent by the bot, the sent Message is returned, otherwise True is returned.
 *
 * @method $this setChatId(int|string $chatId) Optional. Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMessageId(int $messageId) Optional. Required if inline_message_id is not specified. Identifier of the message with live location to stop
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Required if chat_id and message_id are not specified. Identifier of the inline message
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for a new inline keyboard.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#stopmessagelivelocation
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class StopMessageLiveLocation extends AbstractMethod
{
    protected $resultClass = Message::class;
}
