<?php

namespace TelegramBot\types;

/**
 * This object represents a voice note.
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getDuration Duration of the audio in seconds as defined by sender
 * @method string getMimeType Optional. MIME type of the file as defined by sender
 * @method int getFileSize Optional. File size
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setDuration(int $duration) Duration of the audio in seconds as defined by sender
 * @method $this setMimeType(string $mimeType) Optional. MIME type of the file as defined by sender
 * @method $this setFileSize(int $fileSize) Optional. File size
 *
 * @url https://core.telegram.org/bots/api#voice
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Voice extends AbstractType
{

}
