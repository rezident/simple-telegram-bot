<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\InlineKeyboardMarkup;
use TelegramBot\types\LabeledPrice;
use TelegramBot\types\Message;

/**
 * Use this method to send invoices. On success, the sent Message is returned.
 *
 * @method $this setChatId(int $chatId) Required. Unique identifier for the target private chat
 * @method $this setTitle(string $title) Required. Product name, 1-32 characters
 * @method $this setDescription(string $description) Required. Product description, 1-255 characters
 * @method $this setPayload(string $payload) Required. Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
 * @method $this setProviderToken(string $providerToken) Required. Payments provider token, obtained via Botfather
 * @method $this setStartParameter(string $startParameter) Required. Unique deep-linking parameter that can be used to generate this invoice when used as a start parameter
 * @method $this setCurrency(string $currency) Required. Three-letter ISO 4217 currency code, see more on currencies
 * @method $this setPrices(LabeledPrice[] $prices) Required. Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
 * @method $this setProviderData(string $providerData) Optional. JSON-encoded data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
 * @method $this setPhotoUrl(string $photoUrl) Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
 * @method $this setPhotoSize(int $photoSize) Optional. Photo size
 * @method $this setPhotoWidth(int $photoWidth) Optional. Photo width
 * @method $this setPhotoHeight(int $photoHeight) Optional. Photo height
 * @method $this setNeedName(bool $needName) Optional. Pass True, if you require the user's full name to complete the order
 * @method $this setNeedPhoneNumber(bool $needPhoneNumber) Optional. Pass True, if you require the user's phone number to complete the order
 * @method $this setNeedEmail(bool $needEmail) Optional. Pass True, if you require the user's email address to complete the order
 * @method $this setNeedShippingAddress(bool $needShippingAddress) Optional. Pass True, if you require the user's shipping address to complete the order
 * @method $this setSendPhoneNumberToProvider(bool $sendPhoneNumberToProvider) Optional. Pass True, if user's phone number should be sent to provider
 * @method $this setSendEmailToProvider(bool $sendEmailToProvider) Optional. Pass True, if user's email address should be sent to provider
 * @method $this setIsFlexible(bool $isFlexible) Optional. Pass True, if the final price depends on the shipping method
 * @method $this setDisableNotification(bool $disableNotification) Optional. Sends the message silently. Users will receive a notification with no sound.
 * @method $this setReplyToMessageId(int $replyToMessageId) Optional. If the message is a reply, ID of the original message
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. A JSON-serialized object for an inline keyboard. If empty, one 'Pay total price' button will be shown. If not empty, the first button must be a Pay button.
 *
 * @method Message run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#sendinvoice
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class SendInvoice extends AbstractMethod
{
    protected $resultClass = Message::class;
}
