<?php

namespace TelegramBot\types;

/**
 * Represents a link to an article or web page.
 *
 * @method string getType Type of the result, must be article
 * @method string getId Unique identifier for this result, 1-64 Bytes
 * @method string getTitle Title of the result
 * @method InputMessageContent getInputMessageContent Content of the message to be sent
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message
 * @method string getUrl Optional. URL of the result
 * @method bool getHideUrl Optional. Pass True, if you don't want the URL to be shown in the message
 * @method string getDescription Optional. Short description of the result
 * @method string getThumbUrl Optional. Url of the thumbnail for the result
 * @method int getThumbWidth Optional. Thumbnail width
 * @method int getThumbHeight Optional. Thumbnail height
 *
 * @method $this setType(string $type) Type of the result, must be article
 * @method $this setId(string $id) Unique identifier for this result, 1-64 Bytes
 * @method $this setTitle(string $title) Title of the result
 * @method $this setInputMessageContent(InputMessageContent $inputMessageContent) Content of the message to be sent
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message
 * @method $this setUrl(string $url) Optional. URL of the result
 * @method $this setHideUrl(bool $hideUrl) Optional. Pass True, if you don't want the URL to be shown in the message
 * @method $this setDescription(string $description) Optional. Short description of the result
 * @method $this setThumbUrl(string $thumbUrl) Optional. Url of the thumbnail for the result
 * @method $this setThumbWidth(int $thumbWidth) Optional. Thumbnail width
 * @method $this setThumbHeight(int $thumbHeight) Optional. Thumbnail height
 *
 * @url https://core.telegram.org/bots/api#inlinequeryresultarticle
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineQueryResultArticle extends InlineQueryResult
{

}
