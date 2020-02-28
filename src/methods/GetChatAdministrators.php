<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\ChatMember;

/**
 * Use this method to get a list of administrators in a chat. On success, returns an Array of ChatMember objects that contains information about all chat administrators except other bots. If the chat is a group or a supergroup and no administrators were appointed, only the creator will be returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @method ChatMember[] run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getchatadministrators
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetChatAdministrators extends AbstractMethod
{
    protected $resultClass = ChatMember::class;

    protected $resultIsArray = true;
}
