<?php

namespace TelegramBot\types;

/**
 * Represents a photo to be sent.
 *
 * @method string getType Type of the result, must be photo
 * @method string getMedia File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
 * @method string getCaption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 *
 * @method $this setType(string $type) Type of the result, must be photo
 * @method $this setMedia(string $media) File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
 * @method $this setCaption(string $caption) Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 *
 * @url https://core.telegram.org/bots/api#inputmediaphoto
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InputMediaPhoto extends AbstractType
{

}
