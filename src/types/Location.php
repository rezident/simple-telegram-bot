<?php

namespace TelegramBot\types;

/**
 * This object represents a point on the map.
 *
 * @method float getLongitude Longitude as defined by sender
 * @method float getLatitude Latitude as defined by sender
 *
 * @method $this setLongitude(float $longitude) Longitude as defined by sender
 * @method $this setLatitude(float $latitude) Latitude as defined by sender
 *
 * @url https://core.telegram.org/bots/api#location
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Location extends AbstractType
{

}
