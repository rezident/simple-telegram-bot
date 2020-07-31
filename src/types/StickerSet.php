<?php

namespace TelegramBot\types;

/**
 * This object represents a sticker set.
 *
 * @method string getName Sticker set name
 * @method string getTitle Sticker set title
 * @method bool getIsAnimated True, if the sticker set contains animated stickers
 * @method bool getContainsMasks True, if the sticker set contains masks
 * @method Sticker[] getStickers List of all set stickers
 * @method PhotoSize getThumb Optional. Sticker set thumbnail in the. WEBP or .TGS format
 *
 * @method $this setName(string $name) Sticker set name
 * @method $this setTitle(string $title) Sticker set title
 * @method $this setIsAnimated(bool $isAnimated) True, if the sticker set contains animated stickers
 * @method $this setContainsMasks(bool $containsMasks) True, if the sticker set contains masks
 * @method $this setStickers(Sticker[] $stickers) List of all set stickers
 * @method $this setThumb(PhotoSize $thumb) Optional. Sticker set thumbnail in the .WEBP or .TGS format
 *
 * @url https://core.telegram.org/bots/api#stickerset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class StickerSet extends AbstractType
{

}
