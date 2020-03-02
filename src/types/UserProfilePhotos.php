<?php

namespace TelegramBot\types;

/**
 * This object represent a user's profile pictures.
 *
 * @method int getTotalCount Total number of profile pictures the target user has
 *
 * @method $this setTotalCount(int $totalCount) Total number of profile pictures the target user has
 *
 * @url https://core.telegram.org/bots/api#userprofilephotos
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class UserProfilePhotos extends AbstractType
{

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @return PhotoSize[][]
     */
    function getPhotos()
    {
        return parent::getPhotos();
    }

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @param PhotoSize[][] $photos
     *
     * @return $this
     */
    function setPhotos($photos)
    {
        return parent::setPhotos($photos);
    }

}
