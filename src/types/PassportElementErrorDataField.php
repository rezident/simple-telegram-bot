<?php

namespace TelegramBot\types;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @method string getSource Error source, must be data
 * @method string getType The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
 * @method string getFieldName Name of the data field which has the error
 * @method string getDataHash Base64-encoded data hash
 * @method string getMessage Error message
 *
 * @method $this setSource(string $source) Error source, must be data
 * @method $this setType(string $type) The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
 * @method $this setFieldName(string $fieldName) Name of the data field which has the error
 * @method $this setDataHash(string $dataHash) Base64-encoded data hash
 * @method $this setMessage(string $message) Error message
 *
 * @url https://core.telegram.org/bots/api#passportelementerrordatafield
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportElementErrorDataField extends PassportElementError
{

}
