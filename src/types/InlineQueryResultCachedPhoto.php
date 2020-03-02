<?php

namespace TelegramBot\types;

/**
 * Represents a link to a photo stored on the Telegram servers. By default, this photo will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 *
 * @method string getType Type of the result, must be photo
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getPhotoFileId A valid file identifier of the photo
 * @method string getTitle Optional. Title for the result
 * @method string getDescription Optional. Short description of the result
 * @method string getCaption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the photo
 *
 * @method $this setType(string $type) Type of the result, must be photo
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setPhotoFileId(string $photoFileId) A valid file identifier of the photo
 * @method $this setTitle(string $title) Optional. Title for the result
 * @method $this setDescription(string $description) Optional. Short description of the result
 * @method $this setCaption(string $caption) Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the photo
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultcachedphoto
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultCachedPhoto extends InlineQueryResult
{

}
