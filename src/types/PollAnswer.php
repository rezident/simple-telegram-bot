<?php

namespace TelegramBot\types;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @method string getPollId Unique poll identifier
 * @method User getUser The user, who changed the answer to the poll
 * @method int[] getOptionIds 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
 *
 * @url https://core.telegram.org/bots/api#pollanswer
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PollAnswer extends AbstractType
{

}