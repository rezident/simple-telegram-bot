<?php

namespace TelegramBot\types;

/**
 * This object contains information about one answer option in a poll.
 *
 * @method string getText Option text, 1-100 characters
 * @method int getVoterCount Number of users that voted for this option
 *
 * @method $this setText(string $text) Option text, 1-100 characters
 * @method $this setVoterCount(int $voterCount) Number of users that voted for this option
 *
 * @url https://core.telegram.org/bots/api#polloption
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PollOption extends AbstractType
{

}
