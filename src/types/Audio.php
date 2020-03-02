<?php

namespace TelegramBot\types;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getDuration Duration of the audio in seconds as defined by sender
 * @method string getPerformer Optional. Performer of the audio as defined by sender or by audio tags
 * @method string getTitle Optional. Title of the audio as defined by sender or by audio tags
 * @method string getMimeType Optional. MIME type of the file as defined by sender
 * @method int getFileSize Optional. File size
 * @method PhotoSize getThumb Optional. Thumbnail of the album cover to which the music file belongs
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setDuration(int $duration) Duration of the audio in seconds as defined by sender
 * @method $this setPerformer(string $performer) Optional. Performer of the audio as defined by sender or by audio tags
 * @method $this setTitle(string $title) Optional. Title of the audio as defined by sender or by audio tags
 * @method $this setMimeType(string $mimeType) Optional. MIME type of the file as defined by sender
 * @method $this setFileSize(int $fileSize) Optional. File size
 * @method $this setThumb(PhotoSize $thumb) Optional. Thumbnail of the album cover to which the music file belongs
 *
 * @url https://core.telegram.org/bots/api#audio
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Audio extends AbstractType
{

}
