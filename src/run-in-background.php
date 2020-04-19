#!/usr/bin/env php
<?php

use TelegramBot\BackgroundProcess;

require_once __DIR__ . '/../vendor/autoload.php';

date_default_timezone_set('Europe/Moscow');

/** @var BackgroundProcess $backgroundProcess */
$backgroundProcess = unserialize(base64_decode($_ENV['TELEGRAM_BACKGROUND_COMMAND']));
$backgroundProcess->run();
