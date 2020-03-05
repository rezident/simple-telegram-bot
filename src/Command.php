<?php

namespace TelegramBot;

use ReflectionClass;
use ReflectionException;
use TelegramBot\types\Update;

/**
 * Class Command
 *
 * @method array|Command run
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
abstract class Command
{
    /**
     * @var TelegramBot
     */
    protected $bot;

    /**
     * @var Update
     */
    protected $update;

    /**
     * @var string
     */
    private $nextMethod;

    public function __construct(TelegramBot $bot)
    {
        $this->bot = $bot;
    }

    /**
     * @param string $message
     * @param Update $update
     *
     * @return mixed
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function handleNextCommand(string $message, Update $update)
    {
        $this->update = $update;
        if($this->nextMethod !== null) {
            $methodName = $this->nextMethod;
            $this->nextMethod = null;
            return call_user_func_array([$this, $methodName], [$message]);
        }

        return null;
    }

    /**
     * @param string $commandText
     * @param Update $update
     *
     * @return mixed
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function handleCommand(string $commandText, Update $update)
    {
        $this->update = $update;
        $arguments = [];
        $commandParts = explode(' ', $commandText);
        array_shift($commandParts);
        $quoteIsOpen = false;
        while ($commandPart = array_shift($commandParts)) {
            $firstSymbol = mb_substr($commandPart, 0, 1);
            $lastSymbol = mb_substr($commandPart, -1);
            if (($firstSymbol === '"' || $firstSymbol === '«') && $quoteIsOpen === false) {
                $quoteIsOpen = true;
                $commandPart = ltrim($commandPart, '"«');
                array_push($arguments, $commandPart);
            } elseif ($quoteIsOpen === true) {
                if ($lastSymbol === '"' || $lastSymbol === '»') {
                    $quoteIsOpen = false;
                    $commandPart = rtrim($commandPart, '"»');
                }
                array_push($arguments, array_pop($arguments) . ' ' . $commandPart);
            } else {
                array_push($arguments, $commandPart);
            }
        }

        return call_user_func_array([$this, 'run'], $arguments);
    }

    /**
     * @return string
     *
     * @throws ReflectionException
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public static function getDescription(): string
    {
        $reflectionClass = new ReflectionClass(get_called_class());
        $docComment = $reflectionClass->getDocComment();
        preg_match('/\s\*\s(.+)/', $docComment, $matches);
        return trim($matches[1]);
    }

    /** @noinspection PhpUnused */
    public static function getCommandString(): string
    {
        $command = preg_replace_callback(
            '/[A-Z]/',
            function ($matches) {
                return '_' . $matches[0];
            },
            array_reverse(explode('\\', get_called_class()))[0]
        );

        return '/' . trim(mb_strtolower($command), '_');
    }

    /**
     * @param string $nextMethod
     */
    protected function setNextMethod(string $nextMethod)
    {
        $this->nextMethod = $nextMethod;
    }

}
