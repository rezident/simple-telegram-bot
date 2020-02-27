<?php

namespace TelegramBot\types;

/**
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 *
 * @method $this setFilePath(string $filePath) Path to the file which will be uploaded
 * @method $this setMimeType(string $mimeType) Mimetype of the file
 * @method $this setPostName(string $postName) Name of the file
 *
 * @method string getFilePath() Path to the file which will be uploaded
 * @method string getMimeType() Mimetype of the file
 * @method string getPostName() Name of the file
 */
class InputFile extends AbstractType
{
    protected function toQuery()
    {
        return curl_file_create($this->getFilePath(), $this->getMimeType(), $this->getPostName());
    }
}
