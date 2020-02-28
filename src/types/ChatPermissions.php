<?php

namespace TelegramBot\types;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @method bool getCanSendMessages Optional. True, if the user is allowed to send text messages, contacts, locations and venues
 * @method bool getCanSendMediaMessages Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @method bool getCanSendPolls Optional. True, if the user is allowed to send polls, implies can_send_messages
 * @method bool getCanSendOtherMessages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @method bool getCanAddWebPagePreviews Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
 * @method bool getCanChangeInfo Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
 * @method bool getCanInviteUsers Optional. True, if the user is allowed to invite new users to the chat
 * @method bool getCanPinMessages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
 *
 * @method $this setCanSendMessages(bool $canSendMessages) Optional. True, if the user is allowed to send text messages, contacts, locations and venues
 * @method $this setCanSendMediaMessages(bool $canSendMediaMessages) Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @method $this setCanSendPolls(bool $canSendPolls) Optional. True, if the user is allowed to send polls, implies can_send_messages
 * @method $this setCanSendOtherMessages(bool $canSendOtherMessages) Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @method $this setCanAddWebPagePreviews(bool $canAddWebPagePreviews) Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
 * @method $this setCanChangeInfo(bool $canChangeInfo) Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
 * @method $this setCanInviteUsers(bool $canInviteUsers) Optional. True, if the user is allowed to invite new users to the chat
 * @method $this setCanPinMessages(bool $canPinMessages) Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
 *
 * @url https://core.telegram.org/bots/api#chatpermissions
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class ChatPermissions extends AbstractType
{

}
