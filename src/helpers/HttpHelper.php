<?php

namespace TelegramBot\helpers;

class HttpHelper
{
    private static $proxy;

    public static function setProxy($proxy)
    {
        self::$proxy = $proxy;
    }

    public static function post(string $url, $postFields)
    {
        $curl = self::getCurl($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postFields);

        $result = curl_exec($curl);
        curl_close($curl);

        return $result;
    }

    public static function get(string $url)
    {
        $curl = self::getCurl($url);
        $result = curl_exec($curl);
        curl_close($curl);

        return $result;
    }

    private static function getCurl(string $url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        if (self::$proxy) {
            curl_setopt($curl, CURLOPT_PROXY, self::$proxy);
            curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        }

        return $curl;
    }
}
