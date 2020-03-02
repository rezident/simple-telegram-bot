<?php

namespace TelegramBot\types;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @method string getId Unique identifier for this query
 * @method User getFrom Sender
 * @method Location getLocation Optional. Sender location, only for bots that request user location
 * @method string getQuery Text of the query (up to 256 characters)
 * @method string getOffset Offset of the results to be returned, can be controlled by the bot
 *
 * @method $this setId(string $id) Unique identifier for this query
 * @method $this setFrom(User $from) Sender
 * @method $this setLocation(Location $location) Optional. Sender location, only for bots that request user location
 * @method $this setQuery(string $query) Text of the query (up to 256 characters)
 * @method $this setOffset(string $offset) Offset of the results to be returned, can be controlled by the bot
 *
 * @url https://core.telegram.org/bots/api#inlinequery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQuery extends AbstractType
{

}
