<?php

namespace TelegramBot\types;

/**
 * This object contains information about a poll.
 *
 * @method string getId Unique poll identifier
 * @method string getQuestion Poll question, 1-255 characters
 * @method PollOption[] getOptions List of poll options
 * @method int getTotalVoterCount Total number of users that voted in the poll
 * @method bool getIsClosed True, if the poll is closed
 * @method bool getIsAnonymous True, if the poll is anonymous
 * @method string getType Poll type, currently can be “regular” or “quiz”
 * @method bool getAllowsMultipleAnswers True, if the poll allows multiple answers
 * @method int getCorrectOptionId Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 *
 * @method $this setId(string $id) Unique poll identifier
 * @method $this setQuestion(string $question) Poll question, 1-255 characters
 * @method $this setOptions(PollOption[] $options) List of poll options
 * @method $this setTotalVoterCount(int $totalVoterCount) Total number of users that voted in the poll
 * @method $this setIsClosed(bool $isClosed) True, if the poll is closed
 * @method $this setIsAnonymous(bool $isAnonymous) True, if the poll is anonymous
 * @method $this setType(string $type) Poll type, currently can be “regular” or “quiz”
 * @method $this setAllowsMultipleAnswers(bool $allowsMultipleAnswers) True, if the poll allows multiple answers
 * @method $this setCorrectOptionId(int $correctOptionId) Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 *
 * @url https://core.telegram.org/bots/api#poll
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Poll extends AbstractType
{

}
