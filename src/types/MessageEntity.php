<?php

namespace TelegramBot\types;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @method string getType Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
 * @method int getOffset Offset in UTF-16 code units to the start of the entity
 * @method int getLength Length of the entity in UTF-16 code units
 * @method string getUrl Optional. For “text_link” only, url that will be opened after user taps on the text
 * @method User getUser Optional. For “text_mention” only, the mentioned user
 * @method string getLanguage Optional. For “pre” only, the programming language of the entity text
 *
 * @method $this setType(string $type) Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
 * @method $this setOffset(int $offset) Offset in UTF-16 code units to the start of the entity
 * @method $this setLength(int $length) Length of the entity in UTF-16 code units
 * @method $this setUrl(string $url) Optional. For “text_link” only, url that will be opened after user taps on the text
 * @method $this setUser(User $user) Optional. For “text_mention” only, the mentioned user
 * @method $this setLanguage(string $language) Optional. For “pre” only, the programming language of the entity text
 *
 * @url https://core.telegram.org/bots/api#messageentity
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class MessageEntity extends AbstractType
{

}
