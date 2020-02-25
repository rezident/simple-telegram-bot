<?php

namespace TelegramBot\helpers;

class StringHelper
{
    public static function toSnake(string $string)
    {
        return trim(preg_replace_callback(
            '/([A-Z])/',
            function ($symbol) {
                return '_' . strtolower($symbol[1]);
            },
            $string
        ), '_');
    }
}