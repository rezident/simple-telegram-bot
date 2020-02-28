<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\InputMediaAnimation;
use TelegramBot\types\InputMediaAudio;
use TelegramBot\types\InputMediaDocument;
use TelegramBot\types\InputMediaPhoto;
use TelegramBot\types\InputMediaVideo;
use TelegramBot\types\Message;

/**
 * Use this method to edit animation, audio, document, photo, or video messages. If a message is a part of a message album, then it can be edited only to a photo or a video. Otherwise, message type can be changed arbitrarily. When inline message is edited, new file can't be uploaded. Use previously uploaded file via its file_id or specify a URL. On success, if the edited message was sent by the bot, the edited Message is returned, otherwise True is returned.
 *
 * @method $this setChatId(int|string $chatId) Optional. Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMessageId(int $messageId) Optional. Required if inline_message_id is not specified. Identifier of the message to edit
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Required if chat_id and message_id are not specified. Identifier of the inline message
 * @method $this setMedia(InputMediaAnimation|InputMediaDocument|InputMediaAudio|InputMediaPhoto|InputMediaVideo $media) Required. A JSON-serialized object for a new media content of the message
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for a new inline keyboard.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#editmessagemedia
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class EditMessageMedia extends AbstractMethod
{
    protected $resultClass = Message::class;
}
