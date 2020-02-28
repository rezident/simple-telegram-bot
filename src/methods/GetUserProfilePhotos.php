<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\UserProfilePhotos;

/**
 * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 *
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 * @method $this setOffset(int $offset) Optional. Sequential number of the first photo to be returned. By default, all photos are returned.
 * @method $this setLimit(int $limit) Optional. Limits the number of photos to be retrieved. Values between 1—100 are accepted. Defaults to 100.
 *
 * @method UserProfilePhotos run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#getuserprofilephotos
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class GetUserProfilePhotos extends AbstractMethod
{
    protected $resultClass = UserProfilePhotos::class;
}
