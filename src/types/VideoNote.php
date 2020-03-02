<?php

namespace TelegramBot\types;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getLength Video width and height (diameter of the video message) as defined by sender
 * @method int getDuration Duration of the video in seconds as defined by sender
 * @method PhotoSize getThumb Optional. Video thumbnail
 * @method int getFileSize Optional. File size
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setLength(int $length) Video width and height (diameter of the video message) as defined by sender
 * @method $this setDuration(int $duration) Duration of the video in seconds as defined by sender
 * @method $this setThumb(PhotoSize $thumb) Optional. Video thumbnail
 * @method $this setFileSize(int $fileSize) Optional. File size
 *
 * @url https://core.telegram.org/bots/api#videonote
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class VideoNote extends AbstractType
{

}
