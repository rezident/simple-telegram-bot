<?php

namespace TelegramBot\types;

/**
 * This object represents a Telegram user or bot.
 *
 * @method int getId Unique identifier for this user or bot
 * @method bool getIsBot True, if this user is a bot
 * @method string getFirstName User‘s or bot’s first name
 * @method string getLastName Optional. User‘s or bot’s last name
 * @method string getUsername Optional. User‘s or bot’s username
 * @method string getLanguageCode Optional. IETF language tag of the user's language
 * @method bool getCanJoinGroups Optional. True, if the bot can be invited to groups. Returned only in getMe.
 * @method bool getCanReadAllGroupMessages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
 * @method bool getSupportsInlineQueries Optional. True, if the bot supports inline queries. Returned only in getMe.
 *
 * @method $this setId(int $id) Unique identifier for this user or bot
 * @method $this setIsBot(bool $isBot) True, if this user is a bot
 * @method $this setFirstName(string $firstName) User‘s or bot’s first name
 * @method $this setLastName(string $lastName) Optional. User‘s or bot’s last name
 * @method $this setUsername(string $username) Optional. User‘s or bot’s username
 * @method $this setLanguageCode(string $languageCode) Optional. IETF language tag of the user's language
 * @method $this setCanJoinGroups(bool $canJoinGroups) Optional. True, if the bot can be invited to groups. Returned only in getMe.
 * @method $this setCanReadAllGroupMessages(bool $canReadAllGroupMessages) Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
 * @method $this setSupportsInlineQueries(bool $supportsInlineQueries) Optional. True, if the bot supports inline queries. Returned only in getMe.
 *
 * @url https://core.telegram.org/bots/api#user
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class User extends AbstractType
{

}
