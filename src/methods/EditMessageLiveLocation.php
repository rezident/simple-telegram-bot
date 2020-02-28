<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;

/**
 * Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message was sent by the bot, the edited Message is returned, otherwise True is returned.
 *
 * @method $this setChatId(int|string $chatId) Optional. Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMessageId(int $messageId) Optional. Required if inline_message_id is not specified. Identifier of the message to edit
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Required if chat_id and message_id are not specified. Identifier of the inline message
 * @method $this setLatitude(float $latitude) Required. Latitude of new location
 * @method $this setLongitude(float $longitude) Required. Longitude of new location
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for a new inline keyboard.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#editmessagelivelocation
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class EditMessageLiveLocation extends AbstractMethod
{
    protected $resultClass = Message::class;
}
