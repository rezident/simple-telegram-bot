<?php

namespace TelegramBot\types;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 *
 * @method string getSource Error source, must be translation_files
 * @method string getType Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method string[] getFileHashes List of base64-encoded file hashes
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be translation_files
 * @method $this setType(string $type) Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method $this setFileHashes(string[] $fileHashes) List of base64-encoded file hashes
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorTranslationFiles extends PassportElementError
{

}
