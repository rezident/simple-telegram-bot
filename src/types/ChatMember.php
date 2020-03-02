<?php

namespace TelegramBot\types;

/**
 * This object contains information about one member of a chat.
 *
 * @method User getUser Information about the user
 * @method string getStatus The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
 * @method string getCustomTitle Optional. Owner and administrators only. Custom title for this user
 * @method int getUntilDate Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
 * @method bool getCanBeEdited Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
 * @method bool getCanPostMessages Optional. Administrators only. True, if the administrator can post in the channel; channels only
 * @method bool getCanEditMessages Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages; channels only
 * @method bool getCanDeleteMessages Optional. Administrators only. True, if the administrator can delete messages of other users
 * @method bool getCanRestrictMembers Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
 * @method bool getCanPromoteMembers Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @method bool getCanChangeInfo Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other settings
 * @method bool getCanInviteUsers Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
 * @method bool getCanPinMessages Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
 * @method bool getIsMember Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
 * @method bool getCanSendMessages Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
 * @method bool getCanSendMediaMessages Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
 * @method bool getCanSendPolls Optional. Restricted only. True, if the user is allowed to send polls
 * @method bool getCanSendOtherMessages Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
 * @method bool getCanAddWebPagePreviews Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
 *
 * @method $this setUser(User $user) Information about the user
 * @method $this setStatus(string $status) The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
 * @method $this setCustomTitle(string $customTitle) Optional. Owner and administrators only. Custom title for this user
 * @method $this setUntilDate(int $untilDate) Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
 * @method $this setCanBeEdited(bool $canBeEdited) Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
 * @method $this setCanPostMessages(bool $canPostMessages) Optional. Administrators only. True, if the administrator can post in the channel; channels only
 * @method $this setCanEditMessages(bool $canEditMessages) Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages; channels only
 * @method $this setCanDeleteMessages(bool $canDeleteMessages) Optional. Administrators only. True, if the administrator can delete messages of other users
 * @method $this setCanRestrictMembers(bool $canRestrictMembers) Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
 * @method $this setCanPromoteMembers(bool $canPromoteMembers) Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @method $this setCanChangeInfo(bool $canChangeInfo) Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other settings
 * @method $this setCanInviteUsers(bool $canInviteUsers) Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
 * @method $this setCanPinMessages(bool $canPinMessages) Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
 * @method $this setIsMember(bool $isMember) Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
 * @method $this setCanSendMessages(bool $canSendMessages) Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
 * @method $this setCanSendMediaMessages(bool $canSendMediaMessages) Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
 * @method $this setCanSendPolls(bool $canSendPolls) Optional. Restricted only. True, if the user is allowed to send polls
 * @method $this setCanSendOtherMessages(bool $canSendOtherMessages) Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
 * @method $this setCanAddWebPagePreviews(bool $canAddWebPagePreviews) Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
 *
 * @url https://core.telegram.org/bots/api#chatmember
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ChatMember extends AbstractType
{

}
