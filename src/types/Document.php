<?php

namespace TelegramBot\types;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method PhotoSize getThumb Optional. Document thumbnail as defined by sender
 * @method string getFileName Optional. Original filename as defined by sender
 * @method string getMimeType Optional. MIME type of the file as defined by sender
 * @method int getFileSize Optional. File size
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setThumb(PhotoSize $thumb) Optional. Document thumbnail as defined by sender
 * @method $this setFileName(string $fileName) Optional. Original filename as defined by sender
 * @method $this setMimeType(string $mimeType) Optional. MIME type of the file as defined by sender
 * @method $this setFileSize(int $fileSize) Optional. File size
 *
 * @url https://core.telegram.org/bots/api#document
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Document extends AbstractType
{

}
