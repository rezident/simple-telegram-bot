<?php

namespace TelegramBot\types;

/**
 * Contains information about the current status of a webhook.
 *
 * @method string getUrl Webhook URL, may be empty if webhook is not set up
 * @method bool getHasCustomCertificate True, if a custom certificate was provided for webhook certificate checks
 * @method int getPendingUpdateCount Number of updates awaiting delivery
 * @method int getLastErrorDate Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @method string getLastErrorMessage Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @method int getMaxConnections Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @method string[] getAllowedUpdates Optional. A list of update types the bot is subscribed to. Defaults to all update types
 *
 * @method $this setUrl(string $url) Webhook URL, may be empty if webhook is not set up
 * @method $this setHasCustomCertificate(bool $hasCustomCertificate) True, if a custom certificate was provided for webhook certificate checks
 * @method $this setPendingUpdateCount(int $pendingUpdateCount) Number of updates awaiting delivery
 * @method $this setLastErrorDate(int $lastErrorDate) Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
 * @method $this setLastErrorMessage(string $lastErrorMessage) Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
 * @method $this setMaxConnections(int $maxConnections) Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
 * @method $this setAllowedUpdates(string[] $allowedUpdates) Optional. A list of update types the bot is subscribed to. Defaults to all update types
 *
 * @url https://core.telegram.org/bots/api#webhookinfo
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class WebhookInfo extends AbstractType
{

}
