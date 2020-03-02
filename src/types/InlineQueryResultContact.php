<?php

namespace TelegramBot\types;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 *
 * @method string getType Type of the result, must be contact
 * @method string getId Unique identifier for this result, 1-64 Bytes
 * @method string getPhoneNumber Contact's phone number
 * @method string getFirstName Contact's first name
 * @method string getLastName Optional. Contact's last name
 * @method string getVcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the contact
 * @method string getThumbUrl Optional. Url of the thumbnail for the result
 * @method int getThumbWidth Optional. Thumbnail width
 * @method int getThumbHeight Optional. Thumbnail height
 *
 * @method $this setType(string $type) Type of the result, must be contact
 * @method $this setId(string $id) Unique identifier for this result, 1-64 Bytes
 * @method $this setPhoneNumber(string $phoneNumber) Contact's phone number
 * @method $this setFirstName(string $firstName) Contact's first name
 * @method $this setLastName(string $lastName) Optional. Contact's last name
 * @method $this setVcard(string $vcard) Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the contact
 * @method $this setThumbUrl(string $thumbUrl) Optional. Url of the thumbnail for the result
 * @method $this setThumbWidth(int $thumbWidth) Optional. Thumbnail width
 * @method $this setThumbHeight(int $thumbHeight) Optional. Thumbnail height
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultcontact
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultContact extends InlineQueryResult
{

}
