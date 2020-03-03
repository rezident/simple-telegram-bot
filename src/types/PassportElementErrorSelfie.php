<?php

namespace TelegramBot\types;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 *
 * @method string getSource Error source, must be selfie
 * @method string getType The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @method string getFileHash Base64-encoded hash of the file with the selfie
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be selfie
 * @method $this setType(string $type) The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @method $this setFileHash(string $fileHash) Base64-encoded hash of the file with the selfie
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrorselfie
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorSelfie extends PassportElementError
{

}
