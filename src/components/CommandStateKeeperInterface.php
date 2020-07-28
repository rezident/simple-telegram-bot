<?php


namespace TelegramBot\components;


use TelegramBot\Command;

interface CommandStateKeeperInterface
{
    public function set(string $key, Command $command): void;

    public function get(string $key): ?Command;
}