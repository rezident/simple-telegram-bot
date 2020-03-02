<?php

namespace TelegramBot\types;

/**
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @method EncryptedPassportElement[] getData Array with information about documents and other Telegram Passport elements that was shared with the bot
 * @method EncryptedCredentials getCredentials Encrypted credentials required to decrypt the data
 *
 * @method $this setData(EncryptedPassportElement[] $data) Array with information about documents and other Telegram Passport elements that was shared with the bot
 * @method $this setCredentials(EncryptedCredentials $credentials) Encrypted credentials required to decrypt the data
 *
 * @url https://core.telegram.org/bots/api#passportdata
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PassportData extends AbstractType
{

}
