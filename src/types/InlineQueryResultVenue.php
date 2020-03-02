<?php

namespace TelegramBot\types;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 *
 * @method string getType Type of the result, must be venue
 * @method string getId Unique identifier for this result, 1-64 Bytes
 * @method float getLatitude Latitude of the venue location in degrees
 * @method float getLongitude Longitude of the venue location in degrees
 * @method string getTitle Title of the venue
 * @method string getAddress Address of the venue
 * @method string getFoursquareId Optional. Foursquare identifier of the venue if known
 * @method string getFoursquareType Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the venue
 * @method string getThumbUrl Optional. Url of the thumbnail for the result
 * @method int getThumbWidth Optional. Thumbnail width
 * @method int getThumbHeight Optional. Thumbnail height
 *
 * @method $this setType(string $type) Type of the result, must be venue
 * @method $this setId(string $id) Unique identifier for this result, 1-64 Bytes
 * @method $this setLatitude(float $latitude) Latitude of the venue location in degrees
 * @method $this setLongitude(float $longitude) Longitude of the venue location in degrees
 * @method $this setTitle(string $title) Title of the venue
 * @method $this setAddress(string $address) Address of the venue
 * @method $this setFoursquareId(string $foursquareId) Optional. Foursquare identifier of the venue if known
 * @method $this setFoursquareType(string $foursquareType) Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the venue
 * @method $this setThumbUrl(string $thumbUrl) Optional. Url of the thumbnail for the result
 * @method $this setThumbWidth(int $thumbWidth) Optional. Thumbnail width
 * @method $this setThumbHeight(int $thumbHeight) Optional. Thumbnail height
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultvenue
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultVenue extends InlineQueryResult
{

}
