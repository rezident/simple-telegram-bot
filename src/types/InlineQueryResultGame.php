<?php

namespace TelegramBot\types;

/**
 * Represents a Game.
 *
 * @method string getType Type of the result, must be game
 * @method string getId Unique identifier for this result, 1-64 bytes
 * @method string getGameShortName Short name of the game
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 *
 * @method $this setType(string $type) Type of the result, must be game
 * @method $this setId(string $id) Unique identifier for this result, 1-64 bytes
 * @method $this setGameShortName(string $gameShortName) Short name of the game
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultgame
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultGame extends InlineQueryResult
{

}
