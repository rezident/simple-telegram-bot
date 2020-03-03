<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\GameHighScore;

/**
 * Use this method to get data for high score tables. Will return the score of the specified user and several of his neighbors in a game. On success, returns an Array of GameHighScore objects.

This method will currently return scores for the target user, plus two of his closest neighbors on each side. Will also return the top three users if the user and his neighbors are not among them. Please note that this behavior is subject to change.
 *
 * @method $this setUserId(int $userId) Required. Target user id
 * @method $this setChatId(int $chatId) Optional. Required if inline_message_id is not specified. Unique identifier for the target chat
 * @method $this setMessageId(int $messageId) Optional. Required if inline_message_id is not specified. Identifier of the sent message
 * @method $this setInlineMessageId(string $inlineMessageId) Optional. Required if chat_id and message_id are not specified. Identifier of the inline message
 *
 * @method GameHighScore[] run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getgamehighscores
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetGameHighScores extends AbstractMethod
{
    protected $resultClass = GameHighScore::class;

    protected $resultIsArray = true;
}
