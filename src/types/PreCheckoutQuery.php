<?php

namespace TelegramBot\types;

/**
 * This object contains information about an incoming pre-checkout query.
 *
 * @method string getId Unique query identifier
 * @method User getFrom User who sent the query
 * @method string getCurrency Three-letter ISO 4217 currency code
 * @method int getTotalAmount Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @method string getInvoicePayload Bot specified invoice payload
 * @method string getShippingOptionId Optional. Identifier of the shipping option chosen by the user
 * @method OrderInfo getOrderInfo Optional. Order info provided by the user
 *
 * @method $this setId(string $id) Unique query identifier
 * @method $this setFrom(User $from) User who sent the query
 * @method $this setCurrency(string $currency) Three-letter ISO 4217 currency code
 * @method $this setTotalAmount(int $totalAmount) Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @method $this setInvoicePayload(string $invoicePayload) Bot specified invoice payload
 * @method $this setShippingOptionId(string $shippingOptionId) Optional. Identifier of the shipping option chosen by the user
 * @method $this setOrderInfo(OrderInfo $orderInfo) Optional. Order info provided by the user
 *
 * @url https://core.telegram.org/bots/api#precheckoutquery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PreCheckoutQuery extends AbstractType
{

}
