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
 * @method $this setCountryCode(string $countryCode) ISO 3166-1 alpha-2 country code
 * @method $this setState(string $state) State, if applicable
 * @method $this setCity(string $city) City
 * @method $this setStreetLine1(string $streetLine1) First line for the address
 * @method $this setStreetLine2(string $streetLine2) Second line for the address
 * @method $this setPostCode(string $postCode) Address post code
 *
 * @url https://core.telegram.org/bots/api#shippingaddress
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ShippingAddress extends AbstractType
{

}
