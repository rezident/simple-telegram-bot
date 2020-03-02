<?php

namespace TelegramBot\types;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @method string getType Type of the result, must be mpeg4_gif
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getMpeg4Url A valid URL for the MP4 file. File size must not exceed 1MB
 * @method int getMpeg4Width Optional. Video width
 * @method int getMpeg4Height Optional. Video height
 * @method int getMpeg4Duration Optional. Video duration
 * @method string getThumbUrl URL of the static thumbnail (jpeg or gif) for the result
 * @method string getTitle Optional. Title for the result
 * @method string getCaption Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the video animation
 *
 * @method $this setType(string $type) Type of the result, must be mpeg4_gif
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setMpeg4Url(string $mpeg4Url) A valid URL for the MP4 file. File size must not exceed 1MB
 * @method $this setMpeg4Width(int $mpeg4Width) Optional. Video width
 * @method $this setMpeg4Height(int $mpeg4Height) Optional. Video height
 * @method $this setMpeg4Duration(int $mpeg4Duration) Optional. Video duration
 * @method $this setThumbUrl(string $thumbUrl) URL of the static thumbnail (jpeg or gif) for the result
 * @method $this setTitle(string $title) Optional. Title for the result
 * @method $this setCaption(string $caption) Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the video animation
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
{

}
