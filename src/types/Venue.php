<?php

namespace TelegramBot\types;

/**
 * This object represents a venue.
 *
 * @method Location getLocation Venue location
 * @method string getTitle Name of the venue
 * @method string getAddress Address of the venue
 * @method string getFoursquareId Optional. Foursquare identifier of the venue
 * @method string getFoursquareType Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 *
 * @method $this setLocation(Location $location) Venue location
 * @method $this setTitle(string $title) Name of the venue
 * @method $this setAddress(string $address) Address of the venue
 * @method $this setFoursquareId(string $foursquareId) Optional. Foursquare identifier of the venue
 * @method $this setFoursquareType(string $foursquareType) Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 *
 * @url https://core.telegram.org/bots/api#venue
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Venue extends AbstractType
{

}
