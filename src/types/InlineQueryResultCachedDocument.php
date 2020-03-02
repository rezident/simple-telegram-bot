<?php

namespace TelegramBot\types;

/**
 * Represents a link to a file stored on the Telegram servers. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 *
 * @method string getType Type of the result, must be document
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getTitle Title for the result
 * @method string getDocumentFileId A valid file identifier for the file
 * @method string getDescription Optional. Short description of the result
 * @method string getCaption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the file
 *
 * @method $this setType(string $type) Type of the result, must be document
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setTitle(string $title) Title for the result
 * @method $this setDocumentFileId(string $documentFileId) A valid file identifier for the file
 * @method $this setDescription(string $description) Optional. Short description of the result
 * @method $this setCaption(string $caption) Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the file
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultCachedDocument extends InlineQueryResult
{

}
