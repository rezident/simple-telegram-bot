<?php

namespace TelegramBot\types;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth Video width as defined by sender
 * @method int getHeight Video height as defined by sender
 * @method int getDuration Duration of the video in seconds as defined by sender
 * @method PhotoSize getThumb Optional. Animation thumbnail as defined by sender
 * @method string getFileName Optional. Original animation filename as defined by sender
 * @method string getMimeType Optional. MIME type of the file as defined by sender
 * @method int getFileSize Optional. File size
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setWidth(int $width) Video width as defined by sender
 * @method $this setHeight(int $height) Video height as defined by sender
 * @method $this setDuration(int $duration) Duration of the video in seconds as defined by sender
 * @method $this setThumb(PhotoSize $thumb) Optional. Animation thumbnail as defined by sender
 * @method $this setFileName(string $fileName) Optional. Original animation filename as defined by sender
 * @method $this setMimeType(string $mimeType) Optional. MIME type of the file as defined by sender
 * @method $this setFileSize(int $fileSize) Optional. File size
 *
 * @url https://core.telegram.org/bots/api#animation
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Animation extends AbstractType
{

}
