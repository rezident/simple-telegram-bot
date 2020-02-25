<?php

namespace TelegramBot\types;

/**
 * This object represents an incoming update. At most one of the optional parameters can be present in any given update.
 *
 * @method int getUpdateId The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
 * @method Message getMessage Optional. New incoming message of any kind — text, photo, sticker, etc.
 * @method Message getEditedMessage Optional. New version of a message that is known to the bot and was edited
 * @method Message getChannelPost Optional. New incoming channel post of any kind — text, photo, sticker, etc.
 * @method Message getEditedChannelPost Optional. New version of a channel post that is known to the bot and was edited
 * @method InlineQuery getInlineQuery Optional. New incoming inline query
 * @method ChosenInlineResult getChosenInlineResult Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
 * @method CallbackQuery getCallbackQuery Optional. New incoming callback query
 * @method ShippingQuery getShippingQuery Optional. New incoming shipping query. Only for invoices with flexible price
 * @method PreCheckoutQuery getPreCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout
 * @method Poll getPoll Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
 * @method PollAnswer getPollAnswer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
 *
 * @url https://core.telegram.org/bots/api#update
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Update extends AbstractType
{

}