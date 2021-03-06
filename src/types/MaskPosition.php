<?php

namespace TelegramBot\types;

/**
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @method string getPoint The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
 * @method float getXShift Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @method float getYShift Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @method float getScale Mask scaling coefficient. For example, 2.0 means double size.
 *
 * @method $this setPoint(string $point) The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
 * @method $this setXShift(float $xShift) Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
 * @method $this setYShift(float $yShift) Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
 * @method $this setScale(float $scale) Mask scaling coefficient. For example, 2.0 means double size.
 *
 * @url https://core.telegram.org/bots/api#maskposition
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class MaskPosition extends AbstractType
{

}
