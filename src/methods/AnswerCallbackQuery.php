<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\BooleanPrimitive;

/**
 * Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 *
 * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via @Botfather and accept the terms. Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
 *
 * @method $this setCallbackQueryId(string $callbackQueryId) Required. Unique identifier for the query to be answered
 * @method $this setText(string $text) Optional. Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
 * @method $this setShowAlert(bool $showAlert) Optional. If true, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to false.
 * @method $this setUrl(string $url) Optional. URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @Botfather, specify the URL that opens your game – note that this will only work if the query comes from a callback_game button. Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
 * @method $this setCacheTime(int $cacheTime) Optional. The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
 *
 * @method BooleanPrimitive run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#answercallbackquery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class AnswerCallbackQuery extends AbstractMethod
{
    protected $resultClass = BooleanPrimitive::class;
}
