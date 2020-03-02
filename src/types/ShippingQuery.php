<?php

namespace TelegramBot\types;

/**
 * This object contains information about an incoming shipping query.
 *
 * @method string getId Unique query identifier
 * @method User getFrom User who sent the query
 * @method string getInvoicePayload Bot specified invoice payload
 * @method ShippingAddress getShippingAddress User specified shipping address
 *
 * @method $this setId(string $id) Unique query identifier
 * @method $this setFrom(User $from) User who sent the query
 * @method $this setInvoicePayload(string $invoicePayload) Bot specified invoice payload
 * @method $this setShippingAddress(ShippingAddress $shippingAddress) User specified shipping address
 *
 * @url https://core.telegram.org/bots/api#shippingquery
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ShippingQuery extends AbstractType
{

}
