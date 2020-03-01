<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to move a sticker in a set created by the bot to a specific position . Returns True on success.
 *
 * @method $this setSticker(string $sticker) Required. File identifier of the sticker
 * @method $this setPosition(int $position) Required. New sticker position in the set, zero-based
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setstickerpositioninset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetStickerPositionInSet extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
