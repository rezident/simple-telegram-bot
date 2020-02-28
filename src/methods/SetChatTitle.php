<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setTitle(string $title) Required. New chat title, 1-255 characters
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setchattitle
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetChatTitle extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
