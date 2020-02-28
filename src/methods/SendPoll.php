<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\ForceReply;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\Message;
use TelegramBot\types\ReplyKeyboardMarkup;
use TelegramBot\types\ReplyKeyboardRemove;

/**
 * Use this method to send a native poll. On success, the sent Message is returned.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setQuestion(string $question) Required. Poll question, 1-255 characters
 * @method $this setOptions(string[] $options) Required. A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
 * @method $this setIsAnonymous(bool $isAnonymous) Optional. True, if the poll needs to be anonymous, defaults to True
 * @method $this setType(string $type) Optional. Poll type, “quiz” or “regular”, defaults to “regular”
 * @method $this setAllowsMultipleAnswers(bool $allowsMultipleAnswers) Optional. True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
 * @method $this setCorrectOptionId(int $correctOptionId) Optional. 0-based identifier of the correct answer option, required for polls in quiz mode
 * @method $this setIsClosed(bool $isClosed) Optional. Pass True, if the poll needs to be immediately closed. This can be useful for poll preview.
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup) Optional. Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendpoll
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendPoll extends AbstractMethod
{
    protected $resultClass = Message::class;
}
