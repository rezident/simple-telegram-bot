<?php

namespace TelegramBot\types;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 *
 * @method string getMessageText Text of the message to be sent, 1-4096 characters
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
 * @method bool getDisableWebPagePreview Optional. Disables link previews for links in the sent message
 *
 * @method $this setMessageText(string $messageText) Text of the message to be sent, 1-4096 characters
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in your bot's message.
 * @method $this setDisableWebPagePreview(bool $disableWebPagePreview) Optional. Disables link previews for links in the sent message
 *
 * @url https://core.telegram.org/bots/api#inputtextmessagecontent
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InputTextMessageContent extends InputMessageContent
{

}
