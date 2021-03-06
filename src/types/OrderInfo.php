<?php

namespace TelegramBot\types;

/**
 * This object represents information about an order.
 *
 * @method string getName Optional. User name
 * @method string getPhoneNumber Optional. User's phone number
 * @method string getEmail Optional. User email
 * @method ShippingAddress getShippingAddress Optional. User shipping address
 *
 * @method $this setName(string $name) Optional. User name
 * @method $this setPhoneNumber(string $phoneNumber) Optional. User's phone number
 * @method $this setEmail(string $email) Optional. User email
 * @method $this setShippingAddress(ShippingAddress $shippingAddress) Optional. User shipping address
 *
 * @url https://core.telegram.org/bots/api#orderinfo
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class OrderInfo extends AbstractType
{

}
