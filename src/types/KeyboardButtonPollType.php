<?php

namespace TelegramBot\types;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 *
 * @method string getType Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
 *
 * @url https://core.telegram.org/bots/api#keyboardbuttonpolltype
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class KeyboardButtonPollType extends AbstractType
{

}
