<?php

namespace TelegramBot\types;

/**
 * Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 *
 * @method string getType Type of the result, must be audio
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getAudioFileId A valid file identifier for the audio file
 * @method string getCaption Optional. Caption, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the audio
 *
 * @method $this setType(string $type) Type of the result, must be audio
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setAudioFileId(string $audioFileId) A valid file identifier for the audio file
 * @method $this setCaption(string $caption) Optional. Caption, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the audio
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultcachedaudio
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultCachedAudio extends InlineQueryResult
{

}
