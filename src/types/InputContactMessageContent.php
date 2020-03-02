<?php

namespace TelegramBot\types;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 *
 * @method string getPhoneNumber Contact's phone number
 * @method string getFirstName Contact's first name
 * @method string getLastName Optional. Contact's last name
 * @method string getVcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 *
 * @method $this setPhoneNumber(string $phoneNumber) Contact's phone number
 * @method $this setFirstName(string $firstName) Contact's first name
 * @method $this setLastName(string $lastName) Optional. Contact's last name
 * @method $this setVcard(string $vcard) Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 *
 * @url https://core.telegram.org/bots/api#inputcontactmessagecontent
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InputContactMessageContent extends InputMessageContent
{

}
