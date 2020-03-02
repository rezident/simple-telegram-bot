<?php

namespace TelegramBot\types;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth Photo width
 * @method int getHeight Photo height
 * @method int getFileSize Optional. File size
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setWidth(int $width) Photo width
 * @method $this setHeight(int $height) Photo height
 * @method $this setFileSize(int $fileSize) Optional. File size
 *
 * @url https://core.telegram.org/bots/api#photosize
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PhotoSize extends AbstractType
{

}
