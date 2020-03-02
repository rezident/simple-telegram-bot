<?php

namespace TelegramBot\types;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 *
 * @method float getLatitude Latitude of the location in degrees
 * @method float getLongitude Longitude of the location in degrees
 * @method int getLivePeriod Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 *
 * @method $this setLatitude(float $latitude) Latitude of the location in degrees
 * @method $this setLongitude(float $longitude) Longitude of the location in degrees
 * @method $this setLivePeriod(int $livePeriod) Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 *
 * @url https://core.telegram.org/bots/api#inputlocationmessagecontent
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InputLocationMessageContent extends InputMessageContent
{

}
