<?php

namespace TelegramBot\types;

/**
 * This object represents a chat.
 *
 * @method int getId Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method string getType Type of chat, can be either “private”, “group”, “supergroup” or “channel”
 * @method string getTitle Optional. Title, for supergroups, channels and group chats
 * @method string getUsername Optional. Username, for private chats, supergroups and channels if available
 * @method string getFirstName Optional. First name of the other party in a private chat
 * @method string getLastName Optional. Last name of the other party in a private chat
 * @method ChatPhoto getPhoto Optional. Chat photo. Returned only in getChat.
 * @method string getDescription Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
 * @method string getInviteLink Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in getChat.
 * @method Message getPinnedMessage Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
 * @method ChatPermissions getPermissions Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
 * @method int getSlowModeDelay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user. Returned only in getChat.
 * @method string getStickerSetName Optional. For supergroups, name of group sticker set. Returned only in getChat.
 * @method bool getCanSetStickerSet Optional. True, if the bot can change the group sticker set. Returned only in getChat.
 *
 * @method $this setId(int $id) Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method $this setType(string $type) Type of chat, can be either “private”, “group”, “supergroup” or “channel”
 * @method $this setTitle(string $title) Optional. Title, for supergroups, channels and group chats
 * @method $this setUsername(string $username) Optional. Username, for private chats, supergroups and channels if available
 * @method $this setFirstName(string $firstName) Optional. First name of the other party in a private chat
 * @method $this setLastName(string $lastName) Optional. Last name of the other party in a private chat
 * @method $this setPhoto(ChatPhoto $photo) Optional. Chat photo. Returned only in getChat.
 * @method $this setDescription(string $description) Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
 * @method $this setInviteLink(string $inviteLink) Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in getChat.
 * @method $this setPinnedMessage(Message $pinnedMessage) Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
 * @method $this setPermissions(ChatPermissions $permissions) Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
 * @method $this setSlowModeDelay(int $slowModeDelay) Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user. Returned only in getChat.
 * @method $this setStickerSetName(string $stickerSetName) Optional. For supergroups, name of group sticker set. Returned only in getChat.
 * @method $this setCanSetStickerSet(bool $canSetStickerSet) Optional. True, if the bot can change the group sticker set. Returned only in getChat.
 *
 * @url https://core.telegram.org/bots/api#chat
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Chat extends AbstractType
{

}
