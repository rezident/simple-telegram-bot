<?php

namespace TelegramBot\types;

/**
 * This object represents one row of the high scores table for a game.
 *
 * @method int getPosition Position in high score table for the game
 * @method User getUser User
 * @method int getScore Score
 *
 * @method $this setPosition(int $position) Position in high score table for the game
 * @method $this setUser(User $user) User
 * @method $this setScore(int $score) Score
 *
 * @url https://core.telegram.org/bots/api#gamehighscore
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GameHighScore extends AbstractType
{

}
