<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\ForceReply;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;
use TelegramBot\types\ReplyKeyboardMarkup;
use TelegramBot\types\ReplyKeyboardRemove;

/**
 * Use this method to send information about a venue. On success, the sent Message is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setLatitude(float $latitude) Required. Latitude of the venue
 * @method $this setLongitude(float $longitude) Required. Longitude of the venue
 * @method $this setTitle(string $title) Required. Name of the venue
 * @method $this setAddress(string $address) Required. Address of the venue
 * @method $this setFoursquareId(string $foursquareId) Optional. Foursquare identifier of the venue
 * @method $this setFoursquareType(string $foursquareType) Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup) Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendvenue
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendVenue extends AbstractMethod
{
    protected $resultClass = Message::class;
}
