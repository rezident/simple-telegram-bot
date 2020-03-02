<?php

namespace TelegramBot\types;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 *
 * @method string getType Type of the result, must be sticker
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getStickerFileId A valid file identifier of the sticker
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the sticker
 *
 * @method $this setType(string $type) Type of the result, must be sticker
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setStickerFileId(string $stickerFileId) A valid file identifier of the sticker
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the sticker
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultcachedsticker
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultCachedSticker extends InlineQueryResult
{

}
