<?php

namespace TelegramBot\types;

/**
 * This object represents a bot command.
 *
 * @method string getCommand Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @method string getDescription Description of the command, 3-256 characters.
 *
 * @method $this setCommand(string $command) Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @method $this setDescription(string $description) Description of the command, 3-256 characters.
 *
 * @url https://core.telegram.org/bots/api#botcommand
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class BotCommand extends AbstractType
{

}
