<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InputMediaPhoto;
use TelegramBot\types\InputMediaVideo;
use TelegramBot\types\Message;

/**
 * Use this method to send a group of photos or videos as an album. On success, an array of the sent Messages is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMedia(InputMediaPhoto[]|InputMediaVideo[] $media) Required. A JSON-serialized array describing photos and videos to be sent, must include 2–10 items
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the messages silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the messages are a reply, ID of the original message
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendmediagroup
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendMediaGroup extends AbstractMethod
{
    protected $resultClass = Message::class;
}
