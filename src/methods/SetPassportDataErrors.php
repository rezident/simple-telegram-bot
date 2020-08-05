<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\PassportElementError;

/**
 * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns True on success.
Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 *
 * @method $this setUserId(int $userId) Required. User identifier
 * @method $this setErrors(PassportElementError[] $errors) Required. A JSON-serialized array describing the errors
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setpassportdataerrors
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetPassportDataErrors extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
