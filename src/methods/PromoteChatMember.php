<?php

namespace TelegramBot\methods;

use TelegramBot\TelegramBot;
use TelegramBot\types\Boolean;

/**
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Pass False for all boolean parameters to demote a user. Returns True on success.
 *
 * @method $this setChatId(int|string $chatId) Required. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @method $this setUserId(int $userId) Required. Unique identifier of the target user
 * @method $this setCanChangeInfo(bool $canChangeInfo) Optional. Pass True, if the administrator can change chat title, photo and other settings
 * @method $this setCanPostMessages(bool $canPostMessages) Optional. Pass True, if the administrator can create channel posts, channels only
 * @method $this setCanEditMessages(bool $canEditMessages) Optional. Pass True, if the administrator can edit messages of other users and can pin messages, channels only
 * @method $this setCanDeleteMessages(bool $canDeleteMessages) Optional. Pass True, if the administrator can delete messages of other users
 * @method $this setCanInviteUsers(bool $canInviteUsers) Optional. Pass True, if the administrator can invite new users to the chat
 * @method $this setCanRestrictMembers(bool $canRestrictMembers) Optional. Pass True, if the administrator can restrict, ban or unban chat members
 * @method $this setCanPinMessages(bool $canPinMessages) Optional. Pass True, if the administrator can pin messages, supergroups only
 * @method $this setCanPromoteMembers(bool $canPromoteMembers) Optional. Pass True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
 *
 * @method Boolean run(TelegramBot $bot)
 *
 * @url https://core.telegram.org/bots/api#promotechatmember
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class PromoteChatMember extends AbstractMethod
{
    protected $resultClass = Boolean::class;
}
