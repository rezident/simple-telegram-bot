<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\File;
use TelegramBot\types\InputFile;

/**
 * Use this method to upload a .png file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
 *
 * @method $this setUserId(int $userId) Required. User identifier of sticker file owner
 * @method $this setPngSticker(InputFile $pngSticker) Required. Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px.
 *
 * @method File run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#uploadstickerfile
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class UploadStickerFile extends AbstractMethod
{
    protected $resultClass = File::class;
}
