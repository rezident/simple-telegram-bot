<?php

namespace TelegramBot\types;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @method string getResultId The unique identifier for the result that was chosen
 * @method User getFrom The user that chose the result
 * @method Location getLocation Optional. Sender location, only for bots that require user location
 * @method string getInlineMessageId Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
 * @method string getQuery The query that was used to obtain the result
 *
 * @method $this setResultId(string $resultId) The unique identifier for the result that was chosen
 * @method $this setFrom(User $from) The user that chose the result
 * @method $this setLocation(Location $location) Optional. Sender location, only for bots that require user location
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
 * @method $this setQuery(string $query) The query that was used to obtain the result
 *
 * @url https://core.telegram.org/bots/api#choseninlineresult
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ChosenInlineResult extends AbstractType
{

}
