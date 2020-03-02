<?php

namespace TelegramBot\types;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 *
 * @method float getLatitude Latitude of the venue in degrees
 * @method float getLongitude Longitude of the venue in degrees
 * @method string getTitle Name of the venue
 * @method string getAddress Address of the venue
 * @method string getFoursquareId Optional. Foursquare identifier of the venue, if known
 * @method string getFoursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 *
 * @method $this setLatitude(float $latitude) Latitude of the venue in degrees
 * @method $this setLongitude(float $longitude) Longitude of the venue in degrees
 * @method $this setTitle(string $title) Name of the venue
 * @method $this setAddress(string $address) Address of the venue
 * @method $this setFoursquareId(string $foursquareId) Optional. Foursquare identifier of the venue, if known
 * @method $this setFoursquareType(string $foursquareType) Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 *
 * @url https://core.telegram.org/bots/api#inputvenuemessagecontent
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InputVenueMessageContent extends InputMessageContent
{

}
