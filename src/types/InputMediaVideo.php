<?php

namespace TelegramBot\types;

/**
 * Represents a video to be sent.
 *
 * @method string getType Type of the result, must be video
 * @method string getMedia File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
 * @method InputFile|string getThumb Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
 * @method string getCaption Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method string getParseMode Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method int getWidth Optional. Video width
 * @method int getHeight Optional. Video height
 * @method int getDuration Optional. Video duration
 * @method bool getSupportsStreaming Optional. Pass True, if the uploaded video is suitable for streaming
 *
 * @method $this setType(string $type) Type of the result, must be video
 * @method $this setMedia(string $media) File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More info on Sending Files »
 * @method $this setThumb(InputFile|string $thumb) Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
 * @method $this setCaption(string $caption) Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
 * @method $this setParseMode(string $parseMode) Optional. Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this setWidth(int $width) Optional. Video width
 * @method $this setHeight(int $height) Optional. Video height
 * @method $this setDuration(int $duration) Optional. Video duration
 * @method $this setSupportsStreaming(bool $supportsStreaming) Optional. Pass True, if the uploaded video is suitable for streaming
 *
 * @url https://core.telegram.org/bots/api#inputmediavideo
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InputMediaVideo extends AbstractType
{

}
