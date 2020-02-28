<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#deletechatstickerset
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class DeleteChatStickerSet extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
