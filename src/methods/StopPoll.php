<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Poll;

/**
 * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll with the final results is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setMessageId(int $messageId) Required. Identifier of the original message with the poll
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for a new message inline keyboard.
 *
 * @method Poll run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#stoppoll
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class StopPoll extends AbstractMethod
{
    protected $resultClass = Poll::class;
}
