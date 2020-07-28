<?php

namespace TelegramBot\components;

use TelegramBot\Command;

class SimpleCommandStateKeeper implements CommandStateKeeperInterface
{
    /**
     * @var Command[]
     */
    private $storage = [];

    public function set(string $key, Command $command): void
    {
        $this->storage[$key] = $command;
    }

    public function get(string $key): ?Command
    {
        return $this->storage[$key] ?? null;
    }
}
