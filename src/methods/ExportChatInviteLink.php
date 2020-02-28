<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\StringPrimitive;

/**
 * Use this method to generate a new invite link for a chat; any previously generated link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the new invite link as String on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 *
 * @method StringPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#exportchatinvitelink
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ExportChatInviteLink extends AbstractMethod
{
    protected $resultClass = StringPrimitive::class;
}
