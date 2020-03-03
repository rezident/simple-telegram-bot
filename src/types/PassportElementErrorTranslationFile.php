<?php

namespace TelegramBot\types;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 *
 * @method string getSource Error source, must be translation_file
 * @method string getType Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method string getFileHash Base64-encoded file hash
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be translation_file
 * @method $this setType(string $type) Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method $this setFileHash(string $fileHash) Base64-encoded file hash
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrortranslationfile
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorTranslationFile extends PassportElementError
{

}
