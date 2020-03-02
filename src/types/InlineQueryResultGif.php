<?php

namespace TelegramBot\types;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @method string getType Type of the result, must be gif
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getGifUrl A valid URL for the GIF file. File size must not exceed 1MB
 * @method int getGifWidth Optional. Width of the GIF
 * @method int getGifHeight Optional. Height of the GIF
 * @method int getGifDuration Optional. Duration of the GIF
 * @method string getThumbUrl URL of the static thumbnail for the result (jpeg or gif)
 * @method string getTitle Optional. Title for the result
 * @method string getCaption Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the GIF animation
 *
 * @method $this setType(string $type) Type of the result, must be gif
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setGifUrl(string $gifUrl) A valid URL for the GIF file. File size must not exceed 1MB
 * @method $this setGifWidth(int $gifWidth) Optional. Width of the GIF
 * @method $this setGifHeight(int $gifHeight) Optional. Height of the GIF
 * @method $this setGifDuration(int $gifDuration) Optional. Duration of the GIF
 * @method $this setThumbUrl(string $thumbUrl) URL of the static thumbnail for the result (jpeg or gif)
 * @method $this setTitle(string $title) Optional. Title for the result
 * @method $this setCaption(string $caption) Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the GIF animation
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultgif
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultGif extends InlineQueryResult
{

}
