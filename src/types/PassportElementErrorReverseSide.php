<?php

namespace TelegramBot\types;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 *
 * @method string getSource Error source, must be reverse_side
 * @method string getType The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
 * @method string getFileHash Base64-encoded hash of the file with the reverse side of the document
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be reverse_side
 * @method $this setType(string $type) The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
 * @method $this setFileHash(string $fileHash) Base64-encoded hash of the file with the reverse side of the document
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrorreverseside
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorReverseSide extends PassportElementError
{

}
