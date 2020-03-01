<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to delete a sticker from a set created by the bot. Returns True on success.
 *
 * @method $this setSticker(string $sticker) Required. File identifier of the sticker
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#deletestickerfromset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class DeleteStickerFromSet extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
