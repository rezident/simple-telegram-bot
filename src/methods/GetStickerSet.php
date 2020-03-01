<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\StickerSet;

/**
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 *
 * @method $this setName(string $name) Required. Name of the sticker set
 *
 * @method StickerSet run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getstickerset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetStickerSet extends AbstractMethod
{
    protected $resultClass = StickerSet::class;
}
