<?php

namespace TelegramBot\types;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @method string getTitle Title of the game
 * @method string getDescription Description of the game
 * @method PhotoSize[] getPhoto Photo that will be displayed in the game message in chats.
 * @method string getText Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
 * @method MessageEntity[] getTextEntities Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
 * @method Animation getAnimation Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
 *
 * @method $this setTitle(string $title) Title of the game
 * @method $this setDescription(string $description) Description of the game
 * @method $this setPhoto(PhotoSize[] $photo) Photo that will be displayed in the game message in chats.
 * @method $this setText(string $text) Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
 * @method $this setTextEntities(MessageEntity[] $textEntities) Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
 * @method $this setAnimation(Animation $animation) Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
 *
 * @url https://core.telegram.org/bots/api#game
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Game extends AbstractType
{

}
