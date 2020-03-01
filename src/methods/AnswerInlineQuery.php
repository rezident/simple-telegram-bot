<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to send answers to an inline query. On success, True is returned. No more than 50 results per query are allowed.
 *
 * @method $this setInlineQueryId(string $inlineQueryId) Required. Unique identifier for the answered query
 * @method $this setResults(InlineQueryResult[] $results) Required. A JSON-serialized array of results for the inline query
 * @method $this setCacheTime(int $cacheTime) Optional. The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
 * @method $this setIsPersonal(bool $isPersonal) Optional. Pass True, if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query
 * @method $this setNextOffset(string $nextOffset) Optional. Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don‘t support pagination. Offset length can’t exceed 64 bytes.
 * @method $this setSwitchPmText(string $switchPmText) Optional. If passed, clients will display a button with specified text that switches the user to a private chat with the bot and sends the bot a start message with the parameter switch_pm_parameter
 * @method $this setSwitchPmParameter(string $switchPmParameter) Optional. Deep-linking parameter for the /start message sent to the bot when user presses the switch button. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed. Example: An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a ‘Connect your YouTube account’ button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an oauth link. Once done, the bot can offer a switch_inline button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#answerinlinequery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class AnswerInlineQuery extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
