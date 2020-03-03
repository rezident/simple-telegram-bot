<?php

namespace TelegramBot\types;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 *
 * @method string getSource Error source, must be front_side
 * @method string getType The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @method string getFileHash Base64-encoded hash of the file with the front side of the document
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be front_side
 * @method $this setType(string $type) The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @method $this setFileHash(string $fileHash) Base64-encoded hash of the file with the front side of the document
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrorfrontside
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorFrontSide extends PassportElementError
{

}
