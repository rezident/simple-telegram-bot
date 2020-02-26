<?php

namespace TelegramBot\types;

/**
 * This object represents a phone contact.
 *
 * @method string getPhoneNumber Contact's phone number
 * @method string getFirstName Contact's first name
 * @method string getLastName Optional. Contact's last name
 * @method int getUserId Optional. Contact's user identifier in Telegram
 * @method string getVcard Optional. Additional data about the contact in the form of a vCard
 *
 * @url https://core.telegram.org/bots/api#contact
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Contact extends AbstractType
{

}
