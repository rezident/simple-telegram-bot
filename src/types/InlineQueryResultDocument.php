<?php

namespace TelegramBot\types;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only . PDF and . ZIP files can be sent using this method.
 *
 * @method string getType Type of the result, must be document
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getTitle Title for the result
 * @method string getCaption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method string getDocumentUrl A valid URL for the file
 * @method string getMimeType Mime type of the content of the file, either “application/pdf” or “application/zip”
 * @method string getDescription Optional. Short description of the result
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the file
 * @method string getThumbUrl Optional. URL of the thumbnail (jpeg only) for the file
 * @method int getThumbWidth Optional. Thumbnail width
 * @method int getThumbHeight Optional. Thumbnail height
 *
 * @method $this setType(string $type) Type of the result, must be document
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setTitle(string $title) Title for the result
 * @method $this setCaption(string $caption) Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setDocumentUrl(string $documentUrl) A valid URL for the file
 * @method $this setMimeType(string $mimeType) Mime type of the content of the file, either “application/pdf” or “application/zip”
 * @method $this setDescription(string $description) Optional. Short description of the result
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the file
 * @method $this setThumbUrl(string $thumbUrl) Optional. URL of the thumbnail (jpeg only) for the file
 * @method $this setThumbWidth(int $thumbWidth) Optional. Thumbnail width
 * @method $this setThumbHeight(int $thumbHeight) Optional. Thumbnail height
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultdocument
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultDocument extends InlineQueryResult
{

}
