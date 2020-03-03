<?php

namespace TelegramBot\types;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 *
 * @method string getSource Error source, must be files
 * @method string getType The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method string[] getFileHashes List of base64-encoded file hashes
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be files
 * @method $this setType(string $type) The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method $this setFileHashes(string[] $fileHashes) List of base64-encoded file hashes
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrorfiles
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorFiles extends PassportElementError
{

}
