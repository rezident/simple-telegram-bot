<?php

namespace TelegramBot\types;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 *
 * @method string getType Type of the result, must be audio
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getAudioUrl A valid URL for the audio file
 * @method string getTitle Title
 * @method string getCaption Optional. Caption, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method string getPerformer Optional. Performer
 * @method int getAudioDuration Optional. Audio duration in seconds
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the audio
 *
 * @method $this setType(string $type) Type of the result, must be audio
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setAudioUrl(string $audioUrl) A valid URL for the audio file
 * @method $this setTitle(string $title) Title
 * @method $this setCaption(string $caption) Optional. Caption, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setPerformer(string $performer) Optional. Performer
 * @method $this setAudioDuration(int $audioDuration) Optional. Audio duration in seconds
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the audio
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultaudio
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultAudio extends InlineQueryResult
{

}
