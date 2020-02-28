<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;
use TelegramBot\types\InputFile;

/**
 * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setPhoto(InputFile $photo) Required. New chat photo, uploaded using multipart/form-data
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setchatphoto
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetChatPhoto extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
