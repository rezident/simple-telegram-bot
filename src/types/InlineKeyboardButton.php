<?php

namespace TelegramBot\types;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @method string getText Label text on the button
 * @method string getUrl Optional. HTTP or tg:// url to be opened when button is pressed
 * @method LoginUrl getLoginUrl Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
 * @method string getCallbackData Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
 * @method string getSwitchInlineQuery Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted. Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
 * @method string getSwitchInlineQueryCurrentChat Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot’s username will be inserted. This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
 * @method CallbackGame getCallbackGame Optional. Description of the game that will be launched when the user presses the button. NOTE: This type of button must always be the first button in the first row.
 * @method bool getPay Optional. Specify True, to send a Pay button. NOTE: This type of button must always be the first button in the first row.
 *
 * @method $this setText(string $text) Label text on the button
 * @method $this setUrl(string $url) Optional. HTTP or tg:// url to be opened when button is pressed
 * @method $this setLoginUrl(LoginUrl $loginUrl) Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
 * @method $this setCallbackData(string $callbackData) Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
 * @method $this setSwitchInlineQuery(string $switchInlineQuery) Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot‘s username and the specified inline query in the input field. Can be empty, in which case just the bot’s username will be inserted. Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
 * @method $this setSwitchInlineQueryCurrentChat(string $switchInlineQueryCurrentChat) Optional. If set, pressing the button will insert the bot‘s username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot’s username will be inserted. This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
 * @method $this setCallbackGame(CallbackGame $callbackGame) Optional. Description of the game that will be launched when the user presses the button. NOTE: This type of button must always be the first button in the first row.
 * @method $this setPay(bool $pay) Optional. Specify True, to send a Pay button. NOTE: This type of button must always be the first button in the first row.
 *
 * @url https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineKeyboardButton extends AbstractType
{

}
