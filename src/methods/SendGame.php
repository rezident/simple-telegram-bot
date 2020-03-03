<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;

/**
 * Use this method to send a game. On success, the sent Message is returned.
 *
 * @method $this setChatId(int $chatId) Required. Unique identifier for the target chat
 * @method $this setGameShortName(string $gameShortName) Required. Short name of the game, serves as the unique identifier for the game. Set up your games via Botfather.
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for an inline keyboard. If empty, one ‘Play game_title’ button will be shown. If not empty, the first button must launch the game.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendgame
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendGame extends AbstractMethod
{
    protected $resultClass = Message::class;
}
