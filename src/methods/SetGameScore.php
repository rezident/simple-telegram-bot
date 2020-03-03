<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\Message;

/**
 * Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot, returns the edited Message, otherwise returns True. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
 *
 * @method $this setUserId(int $userId) Required. User identifier
 * @method $this setScore(int $score) Required. New score, must be non-negative
 * @method $this setForce(bool $force) Optional. Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
 * @method $this setDisableEditMessage(bool $disableEditMessage) Optional. Pass True, if the game message should not be automatically edited to include the current scoreboard
 * @method $this setChatId(int $chatId) Optional. Required if inline_message_id is not specified. Unique identifier for the target chat
 * @method $this setMessageId(int $messageId) Optional. Required if inline_message_id is not specified. Identifier of the sent message
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Required if chat_id and message_id are not specified. Identifier of the inline message
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#setgamescore
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SetGameScore extends AbstractMethod
{
    protected $resultClass = Message::class;
}
