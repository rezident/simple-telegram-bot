<?php

namespace TelegramBot\types;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 *
 * @method string getType Type of the result, must be location
 * @method string getId Unique identifier for this result, 1-64 Bytes
 * @method float getLatitude Location latitude in degrees
 * @method float getLongitude Location longitude in degrees
 * @method string getTitle Location title
 * @method int getLivePeriod Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method InputMessageContent getInputMessageContent Optional. Content of the message to be sent instead of the location
 * @method string getThumbUrl Optional. Url of the thumbnail for the result
 * @method int getThumbWidth Optional. Thumbnail width
 * @method int getThumbHeight Optional. Thumbnail height
 *
 * @method $this setType(string $type) Type of the result, must be location
 * @method $this setId(string $id) Unique identifier for this result, 1-64 Bytes
 * @method $this setLatitude(float $latitude) Location latitude in degrees
 * @method $this setLongitude(float $longitude) Location longitude in degrees
 * @method $this setTitle(string $title) Location title
 * @method $this setLivePeriod(int $livePeriod) Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Optional. Content of the message to be sent instead of the location
 * @method $this setThumbUrl(string $thumbUrl) Optional. Url of the thumbnail for the result
 * @method $this setThumbWidth(int $thumbWidth) Optional. Thumbnail width
 * @method $this setThumbHeight(int $thumbHeight) Optional. Thumbnail height
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultlocation
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultLocation extends InlineQueryResult
{

}
