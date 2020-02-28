<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setDescription(string $description) Optional. New chat description, 0-255 characters
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setchatdescription
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetChatDescription extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
