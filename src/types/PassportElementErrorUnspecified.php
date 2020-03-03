<?php

namespace TelegramBot\types;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @method string getSource Error source, must be unspecified
 * @method string getType Type of element of the user's Telegram Passport which has the issue
 * @method string getElementHash Base64-encoded element hash
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be unspecified
 * @method $this setType(string $type) Type of element of the user's Telegram Passport which has the issue
 * @method $this setElementHash(string $elementHash) Base64-encoded element hash
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrorunspecified
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorUnspecified extends PassportElementError
{

}
