<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\ForceReply;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;
use TelegramBot\types\ReplyKeyboardMarkup;
use TelegramBot\types\ReplyKeyboardRemove;

/**
 * Use this method to send phone contacts. On success, the sent Message is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setPhoneNumber(string $phoneNumber) Required. Contact's phone number
 * @method $this setFirstName(string $firstName) Required. Contact's first name
 * @method $this setLastName(string $lastName) Optional. Contact's last name
 * @method $this setVcard(string $vcard) Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup) Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove keyboard or to force a reply from the user.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendcontact
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendContact extends AbstractMethod
{
    protected $resultClass = Message::class;
}
