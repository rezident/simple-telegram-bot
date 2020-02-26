<?php

namespace TelegramBot\types;

/**
 * Contains data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 *
 * @method string getData Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
 * @method string getHash Base64-encoded data hash for data authentication
 * @method string getSecret Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
 *
 * @url https://core.telegram.org/bots/api#encryptedcredentials
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class EncryptedCredentials extends AbstractType
{

}
