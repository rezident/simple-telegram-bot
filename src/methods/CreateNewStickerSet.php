<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\InputFile;
use TelegramBot\types\MaskPosition;

/**
 * Use this method to create new sticker set owned by a user. The bot will be able to edit the created sticker set. Returns True on success.
 *
 * @method $this setUserId(int $userId) Required. User identifier of created sticker set owner
 * @method $this setName(string $name) Required. Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only english letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in “_by_<bot username>”. <bot_username> is case insensitive. 1-64 characters.
 * @method $this setTitle(string $title) Required. Sticker set title, 1-64 characters
 * @method $this setPngSticker(InputFile|string $pngSticker) Required. Png image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data.
 * @method $this setEmojis(string $emojis) Required. One or more emoji corresponding to the sticker
 * @method $this setContainsMasks(bool $containsMasks) Optional. Pass True, if a set of mask stickers should be created
 * @method $this setMaskPosition(MaskPosition $maskPosition) Optional. A JSON-serialized object for position where the mask should be placed on faces
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#createnewstickerset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class CreateNewStickerSet extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
