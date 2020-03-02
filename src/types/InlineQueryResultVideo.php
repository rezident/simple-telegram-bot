<?php

namespace TelegramBot\types;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.

If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you must replace its content using input_message_content.
 *
 * @method string getType Type of the result, must be video
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getVideoUrl A valid URL for the embedded video player or video file
 * @method string getMimeType Mime type of the content of video url, “text/html” or “video/mp4”
 * @method string getThumbUrl URL of the thumbnail (jpeg only) for the video
 * @method string getTitle Title for the result
 * @method string getCaption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method int getVideoWidth Optional. Video width
 * @method int getVideoHeight Optional. Video height
 * @method int getVideoDuration Optional. Video duration in seconds
 * @method string getDescription Optional. Short description of the result
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
 *
 * @method $this setType(string $type) Type of the result, must be video
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setVideoUrl(string $videoUrl) A valid URL for the embedded video player or video file
 * @method $this setMimeType(string $mimeType) Mime type of the content of video url, “text/html” or “video/mp4”
 * @method $this setThumbUrl(string $thumbUrl) URL of the thumbnail (jpeg only) for the video
 * @method $this setTitle(string $title) Title for the result
 * @method $this setCaption(string $caption) Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setVideoWidth(int $videoWidth) Optional. Video width
 * @method $this setVideoHeight(int $videoHeight) Optional. Video height
 * @method $this setVideoDuration(int $videoDuration) Optional. Video duration in seconds
 * @method $this setDescription(string $description) Optional. Short description of the result
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultvideo
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultVideo extends InlineQueryResult
{

}
