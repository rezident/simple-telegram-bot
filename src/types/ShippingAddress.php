<?php

namespace TelegramBot\types;

/**
 * This object represents a shipping address.
 *
 * @method string getCountryCode ISO 3166-1 alpha-2 country code
 * @method string getState State, if applicable
 * @method string getCity City
 * @method string getStreetLine1 First line for the address
 * @method string getStreetLine2 Second line for the address
 * @method string getPostCode Address post code
 *
 * @url https://core.telegram.org/bots/api#shippingaddress
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ShippingAddress extends AbstractType
{

}
