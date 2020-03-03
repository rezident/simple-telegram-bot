<?php

namespace TelegramBot\types;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 *
 * @method string getSource Error source, must be file
 * @method string getType The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method string getFileHash Base64-encoded file hash
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be file
 * @method $this setType(string $type) The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method $this setFileHash(string $fileHash) Base64-encoded file hash
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrorfile
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorFile extends PassportElementError
{

}
