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
 * Use this method to send photos. On success, the sent Message is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setPhoto(InputFile|string $photo) Required. Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. More info on Sending Files »
 * @method $this setCaption(string $caption) Optional. Photo caption (may also be used when resending photos by file_id), 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup) Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendphoto
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendPhoto extends AbstractMethod
{
    protected $resultClass = Message::class;
}
