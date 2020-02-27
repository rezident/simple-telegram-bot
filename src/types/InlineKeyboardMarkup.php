<?php

namespace TelegramBot\types;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * @url https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class InlineKeyboardMarkup extends AbstractType
{

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     *
     * @return InlineKeyboardButton[][]
     */
    function getInlineKeyboard()
    {
        return parent::getInlineKeyboard();
    }

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     *
     * @param InlineKeyboardButton[][] $inlineKeyboard
     *
     * @return $this
     */
    function setInlineKeyboard($inlineKeyboard)
    {
        return parent::setInlineKeyboard($inlineKeyboard);
    }

}
