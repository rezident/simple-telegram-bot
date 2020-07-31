<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\InputFile;

/**
 * Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Returns True on success.
 *
 * @method $this setName(string $name) Required. Sticker set name
 * @method $this setUserId(int $userId) Required. User identifier of the sticker set owner
 * @method $this setThumb(InputFile|string $thumb) Optional. A PNG image with the thumbnail, must be up to 128 kilobytes in size and have width and height exactly 100px, or a TGS animation with the thumbnail up to 32 kilobytes in size; see https://core.telegram.org/animated_stickers#technical-requirements for animated sticker technical requirements. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files ». Animated sticker set thumbnail can't be uploaded via HTTP URL.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setstickersetthumb
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetStickerSetThumb extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
