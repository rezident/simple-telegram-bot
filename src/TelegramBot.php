<?php

namespace TelegramBot;

use TelegramBot\helpers\HttpHelper;
use TelegramBot\methods\AbstractMethod;
use TelegramBot\methods\GetUpdates;
use TelegramBot\methods\SendMessage;
use TelegramBot\types\Update;

/**
 * Class TelegramBot
 *
 * @method $this setToken(string $token) Required. Bot's token
 * @method $this setPrivateFor(int|string $privateFor) Optional. Bot will work only with specified user
 * @method $this setPoolTimeout(int $poolTimeout) Optional. Timeout in seconds for long polling. Defaults to 10
 * @method $this setCommandsNamespace(string $commandsNamespace) Optional. Namespace of available commands
 * @method $this setCommandsPath(string $commandsPath) Optional. Path of available commands
 * @method $this setProxy(string $proxy) Optional. Proxy Connection String
 *
 * @method string getToken Required. Bot's token
 * @method int|string getPrivateFor Optional. Bot will work only with specified user
 * @method int getPoolTimeout Optional. Timeout in seconds for long polling. Defaults to 10
 * @method string getCommandsNamespace Optional. Namespace of available commands
 * @method string getCommandsPath Optional. Path of available commands
 * @method string getProxy Optional. Proxy Connection String
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class TelegramBot extends ConfigurableComponent
{
    const DEFAULT_POOL_TIMEOUT = 10;

    const MAX_MESSAGE_SIZE = 3072;

    const INTERNAL_COMMANDS_NAMESPACE = 'TelegramBot\\commands';

    const INTERNAL_COMMANDS_PATH = __DIR__ . '/commands';

    private $lastUpdateId = 0;

    /**
     * @var string[]
     */
    private $commandClasses = [];

    /**
     * @var Command
     */
    private $commandOfUsers = [];

    public function run($startCommand = null)
    {
        HttpHelper::setProxy($this->getProxy());
        $this->execute($startCommand);
        $this->fetchCommandClasses();
        $this->fetchLastUpdateId();
        $this->poolCycle();
    }

    /**
     * @return string[]
     */
    public function getCommandClasses(): array
    {
        return $this->commandClasses;
    }

    /**
     * Executes a command
     *
     * @param array|Command|null $command
     * @param int|string|null    $chatId
     *
     * @throws exceptions\RequestExecutionError
     * @throws exceptions\ResultClassIsNotSpecifiedException
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function execute($command, $chatId = null)
    {
        if (is_array($command) && is_array($command[0])) {
            $size = 0;
            $newMessage = [];
            foreach ($command[0] as $line) {
                if ($size + strlen($line) > self::MAX_MESSAGE_SIZE) {
                    $this->execute([$newMessage, $command[1]], $chatId);
                    $newMessage = [];
                    $size = 0;
                }
                $newMessage[] = $line;
                $size += strlen($line);
            }

            $command[0] = $newMessage;
        }

        if ($chatId === null) {
            $chatId = $this->getPrivateFor();
        }

        if ($chatId === null) {
            return null;
        }

        if ($command === null) {
            return null;
        }

        if ($command instanceof AbstractMethod) {
            $method = $command;
        } else {
            $method = SendMessage::create()->setChatId($chatId);
            $text = is_array($command[0]) ? implode(PHP_EOL, $command[0]) : $command[0];
            if (!$text) {
                return null;
            }
            $method->setText($text);
            if (isset($command[1]) && $command[1]) {
                $method->setParseMode(SendMessage::PARSE_MODE_MARKDOWN);
            }
        }

        return $method->run($this);
    }

    private function fetchLastUpdateId()
    {
        $firstUpdates = GetUpdates::create()->run($this);
        if (count($firstUpdates)) {
            $this->lastUpdateId = array_reverse($firstUpdates)[0]->getUpdateId() + 1;
        }
    }

    private function poolCycle(): void
    {
        $timeout = $this->getPoolTimeout() ?? self::DEFAULT_POOL_TIMEOUT;
        while (true) {
            $updates = GetUpdates::create()->setTimeout($timeout)->setOffset($this->lastUpdateId)->run($this);
            foreach ($updates as $update) {
                $this->lastUpdateId = $update->getUpdateId() + 1;
                $this->handleUpdate($update);
            }
        }
    }

    private function isSkip(Update $update): bool
    {
        $chat = $update->getMessage()->getChat();

        switch (gettype($this->getPrivateFor())) {
            case 'string':
                return $this->getPrivateFor() !== $chat->getUsername();
            case 'integer':
                return $this->getPrivateFor() !== $chat->getId();
            default:
                return false;
        }
    }

    private function handleUpdate(Update $update): void
    {
        if (empty($update->getMessage()) && $update->getCallbackQuery()) {
            $update->setMessage($update->getCallbackQuery()->getMessage());
            $update->getMessage()->setText($update->getCallbackQuery()->getData());
        }
        if ($this->isSkip($update)) {
            return;
        }

        /** @var Command $command */
        if ($this->isCommand($update)) {
            $commandText = explode(' ', mb_strtolower($update->getMessage()->getText()))[0];
            $commandClass = $this->commandClasses[$commandText] ?? $this->commandClasses['/help'];
            $command = new $commandClass($this);
            $this->commandOfUsers[$update->getMessage()->getChat()->getId()] = $command;
            $result = $command->handleCommand($update->getMessage()->getText(), $update);
        } else {
            $command = $this->commandOfUsers[$update->getMessage()->getChat()->getId()];
            $result = $command ? $command->handleNextCommand($update->getMessage()->getText(), $update) : null;
        }

        $this->execute($result, $update->getMessage()->getChat()->getId());
    }

    private function isCommand(Update $update): bool
    {
        return mb_substr($update->getMessage()->getText(), 0, 1) === '/';
    }

    private function fetchCommandClasses()
    {
        $namespaces = [self::INTERNAL_COMMANDS_NAMESPACE, $this->getCommandsNamespace()];
        foreach ([self::INTERNAL_COMMANDS_PATH, $this->getCommandsPath()] as $index => $path) {
            if ($path) {
                foreach (glob($path . '/*.php') as $file) {
                    $fileName = pathinfo($file, PATHINFO_FILENAME);
                    $className = $namespaces[$index] . '\\' . $fileName;
                    $this->commandClasses[call_user_func([$className, 'getCommandString'])] = $className;
                }
            }
        }
    }
}
