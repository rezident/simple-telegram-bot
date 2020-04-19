<?php

namespace TelegramBot\types;

use TelegramBot\TelegramBot;

/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 *
 * Maximum file size to download is 20 MB
 *
 * @method string getFileId Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getFileSize Optional. File size, if known
 * @method string getFilePath Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
 *
 * @method $this setFileId(string $fileId) Identifier for this file, which can be used to download or reuse the file
 * @method $this setFileUniqueId(string $fileUniqueId) Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method $this setFileSize(int $fileSize) Optional. File size, if known
 * @method $this setFilePath(string $filePath) Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
 *
 * @url https://core.telegram.org/bots/api#file
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class File extends AbstractType
{
    const DOWNLOAD_URL_PREFIX = 'https://api.telegram.org/file/bot';

    /**
     * Downloads a file, represented by this type
     *
     * @param TelegramBot $bot
     *
     * @return false|string
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function getFileContent(TelegramBot $bot)
    {
        $url = implode('', [self::DOWNLOAD_URL_PREFIX, $bot->getToken(), '/' . $this->getFilePath()]);

        return file_get_contents($url);
    }
}
