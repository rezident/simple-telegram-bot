<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\InputFile;
use TelegramBot\types\MaskPosition;

/**
 * Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker or tgs_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
 *
 * @method $this setUserId(int $userId) Required. User identifier of sticker set owner
 * @method $this setName(string $name) Required. Sticker set name
 * @method $this setPngSticker(InputFile|string $pngSticker) Optional. PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More info on Sending Files »
 * @method $this setTgsSticker(InputFile $tgsSticker) Optional. TGS animation with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/animated_stickers#technical-requirements for technical requirements
 * @method $this setEmojis(string $emojis) Required. One or more emoji corresponding to the sticker
 * @method $this setMaskPosition(MaskPosition $maskPosition) Optional. A JSON-serialized object for position where the mask should be placed on faces
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#addstickertoset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class AddStickerToSet extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
