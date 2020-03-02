<?php

namespace TelegramBot\types;

/**
 * This object represents a sticker.
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth Sticker width
 * @method int getHeight Sticker height
 * @method bool getIsAnimated True, if the sticker is animated
 * @method PhotoSize getThumb Optional. Sticker thumbnail in the .webp or .jpg format
 * @method string getEmoji Optional. Emoji associated with the sticker
 * @method string getSetName Optional. Name of the sticker set to which the sticker belongs
 * @method MaskPosition getMaskPosition Optional. For mask stickers, the position where the mask should be placed
 * @method int getFileSize Optional. File size
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setWidth(int $width) Sticker width
 * @method $this setHeight(int $height) Sticker height
 * @method $this setIsAnimated(bool $isAnimated) True, if the sticker is animated
 * @method $this setThumb(PhotoSize $thumb) Optional. Sticker thumbnail in the .webp or .jpg format
 * @method $this setEmoji(string $emoji) Optional. Emoji associated with the sticker
 * @method $this setSetName(string $setName) Optional. Name of the sticker set to which the sticker belongs
 * @method $this setMaskPosition(MaskPosition $maskPosition) Optional. For mask stickers, the position where the mask should be placed
 * @method $this setFileSize(int $fileSize) Optional. File size
 *
 * @url https://core.telegram.org/bots/api#sticker
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Sticker extends AbstractType
{

}
