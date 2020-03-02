<?php

namespace TelegramBot\types;

/**
 * This object represents a message.
 *
 * @method int getMessageId Unique message identifier inside this chat
 * @method User getFrom Optional. Sender, empty for messages sent to channels
 * @method int getDate Date the message was sent in Unix time
 * @method Chat getChat Conversation the message belongs to
 * @method User getForwardFrom Optional. For forwarded messages, sender of the original message
 * @method Chat getForwardFromChat Optional. For messages forwarded from channels, information about the original channel
 * @method int getForwardFromMessageId Optional. For messages forwarded from channels, identifier of the original message in the channel
 * @method string getForwardSignature Optional. For messages forwarded from channels, signature of the post author if present
 * @method string getForwardSenderName Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
 * @method int getForwardDate Optional. For forwarded messages, date the original message was sent in Unix time
 * @method Message getReplyToMessage Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @method int getEditDate Optional. Date the message was last edited in Unix time
 * @method string getMediaGroupId Optional. The unique identifier of a media message group this message belongs to
 * @method string getAuthorSignature Optional. Signature of the post author for messages in channels
 * @method string getText Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
 * @method MessageEntity[] getEntities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @method MessageEntity[] getCaptionEntities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @method Audio getAudio Optional. Message is an audio file, information about the file
 * @method Document getDocument Optional. Message is a general file, information about the file
 * @method Animation getAnimation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
 * @method Game getGame Optional. Message is a game, information about the game. More about games »
 * @method PhotoSize[] getPhoto Optional. Message is a photo, available sizes of the photo
 * @method Sticker getSticker Optional. Message is a sticker, information about the sticker
 * @method Video getVideo Optional. Message is a video, information about the video
 * @method Voice getVoice Optional. Message is a voice message, information about the file
 * @method VideoNote getVideoNote Optional. Message is a video note, information about the video message
 * @method string getCaption Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
 * @method Contact getContact Optional. Message is a shared contact, information about the contact
 * @method Location getLocation Optional. Message is a shared location, information about the location
 * @method Venue getVenue Optional. Message is a venue, information about the venue
 * @method Poll getPoll Optional. Message is a native poll, information about the poll
 * @method User[] getNewChatMembers Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @method User getLeftChatMember Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @method string getNewChatTitle Optional. A chat title was changed to this value
 * @method PhotoSize[] getNewChatPhoto Optional. A chat photo was change to this value
 * @method bool getDeleteChatPhoto Optional. Service message: the chat photo was deleted
 * @method bool getGroupChatCreated Optional. Service message: the group has been created
 * @method bool getSupergroupChatCreated Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @method bool getChannelChatCreated Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @method int getMigrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method int getMigrateFromChatId Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method Message getPinnedMessage Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
 * @method Invoice getInvoice Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @method SuccessfulPayment getSuccessfulPayment Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @method string getConnectedWebsite Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @method PassportData getPassportData Optional. Telegram Passport data
 * @method InlineKeyboardMarkup getReplyMarkup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 *
 * @method $this setMessageId(int $messageId) Unique message identifier inside this chat
 * @method $this setFrom(User $from) Optional. Sender, empty for messages sent to channels
 * @method $this setDate(int $date) Date the message was sent in Unix time
 * @method $this setChat(Chat $chat) Conversation the message belongs to
 * @method $this setForwardFrom(User $forwardFrom) Optional. For forwarded messages, sender of the original message
 * @method $this setForwardFromChat(Chat $forwardFromChat) Optional. For messages forwarded from channels, information about the original channel
 * @method $this setForwardFromMessageId(int $forwardFromMessageId) Optional. For messages forwarded from channels, identifier of the original message in the channel
 * @method $this setForwardSignature(string $forwardSignature) Optional. For messages forwarded from channels, signature of the post author if present
 * @method $this setForwardSenderName(string $forwardSenderName) Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
 * @method $this setForwardDate(int $forwardDate) Optional. For forwarded messages, date the original message was sent in Unix time
 * @method $this setReplyToMessage(Message $replyToMessage) Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
 * @method $this setEditDate(int $editDate) Optional. Date the message was last edited in Unix time
 * @method $this setMediaGroupId(string $mediaGroupId) Optional. The unique identifier of a media message group this message belongs to
 * @method $this setAuthorSignature(string $authorSignature) Optional. Signature of the post author for messages in channels
 * @method $this setText(string $text) Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
 * @method $this setEntities(MessageEntity[] $entities) Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
 * @method $this setCaptionEntities(MessageEntity[] $captionEntities) Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
 * @method $this setAudio(Audio $audio) Optional. Message is an audio file, information about the file
 * @method $this setDocument(Document $document) Optional. Message is a general file, information about the file
 * @method $this setAnimation(Animation $animation) Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
 * @method $this setGame(Game $game) Optional. Message is a game, information about the game. More about games »
 * @method $this setPhoto(PhotoSize[] $photo) Optional. Message is a photo, available sizes of the photo
 * @method $this setSticker(Sticker $sticker) Optional. Message is a sticker, information about the sticker
 * @method $this setVideo(Video $video) Optional. Message is a video, information about the video
 * @method $this setVoice(Voice $voice) Optional. Message is a voice message, information about the file
 * @method $this setVideoNote(VideoNote $videoNote) Optional. Message is a video note, information about the video message
 * @method $this setCaption(string $caption) Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
 * @method $this setContact(Contact $contact) Optional. Message is a shared contact, information about the contact
 * @method $this setLocation(Location $location) Optional. Message is a shared location, information about the location
 * @method $this setVenue(Venue $venue) Optional. Message is a venue, information about the venue
 * @method $this setPoll(Poll $poll) Optional. Message is a native poll, information about the poll
 * @method $this setNewChatMembers(User[] $newChatMembers) Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
 * @method $this setLeftChatMember(User $leftChatMember) Optional. A member was removed from the group, information about them (this member may be the bot itself)
 * @method $this setNewChatTitle(string $newChatTitle) Optional. A chat title was changed to this value
 * @method $this setNewChatPhoto(PhotoSize[] $newChatPhoto) Optional. A chat photo was change to this value
 * @method $this setDeleteChatPhoto(bool $deleteChatPhoto) Optional. Service message: the chat photo was deleted
 * @method $this setGroupChatCreated(bool $groupChatCreated) Optional. Service message: the group has been created
 * @method $this setSupergroupChatCreated(bool $supergroupChatCreated) Optional. Service message: the supergroup has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
 * @method $this setChannelChatCreated(bool $channelChatCreated) Optional. Service message: the channel has been created. This field can‘t be received in a message coming through updates, because bot can’t be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
 * @method $this setMigrateToChatId(int $migrateToChatId) Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method $this setMigrateFromChatId(int $migrateFromChatId) Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
 * @method $this setPinnedMessage(Message $pinnedMessage) Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
 * @method $this setInvoice(Invoice $invoice) Optional. Message is an invoice for a payment, information about the invoice. More about payments »
 * @method $this setSuccessfulPayment(SuccessfulPayment $successfulPayment) Optional. Message is a service message about a successful payment, information about the payment. More about payments »
 * @method $this setConnectedWebsite(string $connectedWebsite) Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
 * @method $this setPassportData(PassportData $passportData) Optional. Telegram Passport data
 * @method $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup) Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
 *
 * @url https://core.telegram.org/bots/api#message
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Message extends AbstractType
{

}
