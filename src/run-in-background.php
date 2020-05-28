#!/usr/bin/env php
<?php

use TelegramBot\BackgroundProcess;
use TelegramBot\helpers\HttpHelper;

$path = __DIR__;
while(!file_exists($path . '/vendor/autoload.php')) {
    $path .= '/..';
}

require_once $path . '/vendor/autoload.php';

date_default_timezone_set('Europe/Moscow');

/** @var BackgroundProcess $backgroundProcess */
$backgroundProcess = unserialize(base64_decode(getenv('TELEGRAM_BACKGROUND_COMMAND')));
HttpHelper::setProxy($backgroundProcess->getBot()->getProxy());
$backgroundProcess->run();
