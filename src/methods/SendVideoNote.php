<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\ForceReply;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\InputFile;
use TelegramBot\types\Message;
use TelegramBot\types\ReplyKeyboardMarkup;
use TelegramBot\types\ReplyKeyboardRemove;

/**
 * As of v.4.0, Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setVideoNote(InputFile|string $videoNote) Required. Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. More info on Sending Files ». Sending video notes by a URL is currently unsupported
 * @method $this setDuration(int $duration) Optional. Duration of sent video in seconds
 * @method $this setLength(int $length) Optional. Video width and height, i.e. diameter of the video message
 * @method $this setThumb(InputFile|string $thumb) Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup) Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendvideonote
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendVideoNote extends AbstractMethod
{
    protected $resultClass = Message::class;
}
