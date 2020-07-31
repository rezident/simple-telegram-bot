<?php

namespace TelegramBot\types;

/**
 * This object represents an animated emoji that displays a random value.
 *
 * @method string getEmoji Emoji on which the dice throw animation is based
 * @method int getValue Value of the dice, 1-6 for “🎲” and “🎯” base emoji, 1-5 for “🏀” base emoji
 *
 * @method $this setEmoji(string $emoji) Emoji on which the dice throw animation is based
 * @method $this setValue(int $value) Value of the dice, 1-6 for “” and “” base emoji, 1-5 for “” base emoji
 *
 * @url https://core.telegram.org/bots/api#dice
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Dice extends AbstractType
{

}
