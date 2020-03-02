<?php

namespace TelegramBot\types;

/**
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @method string getType Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
 * @method string getData Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method string getPhoneNumber Optional. User's verified phone number, available only for “phone_number” type
 * @method string getEmail Optional. User's verified email address, available only for “email” type
 * @method PassportFile[] getFiles Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method PassportFile getFrontSide Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method PassportFile getReverseSide Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method PassportFile getSelfie Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method PassportFile[] getTranslation Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method string getHash Base64-encoded element hash for using in PassportElementErrorUnspecified
 *
 * @method $this setType(string $type) Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
 * @method $this setData(string $data) Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method $this setPhoneNumber(string $phoneNumber) Optional. User's verified phone number, available only for “phone_number” type
 * @method $this setEmail(string $email) Optional. User's verified email address, available only for “email” type
 * @method $this setFiles(PassportFile[] $files) Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method $this setFrontSide(PassportFile $frontSide) Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method $this setReverseSide(PassportFile $reverseSide) Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method $this setSelfie(PassportFile $selfie) Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method $this setTranslation(PassportFile[] $translation) Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
 * @method $this setHash(string $hash) Base64-encoded element hash for using in PassportElementErrorUnspecified
 *
 * @url https://core.telegram.org/bots/api#encryptedpassportelement
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class EncryptedPassportElement extends AbstractType
{

}
