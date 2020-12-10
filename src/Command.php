<?php

namespace TelegramBot;

use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
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
    protected static $alias;

    /**
     * @var string
     */
    private $nextMethod;

    public function __construct(TelegramBot $bot)
    {
        $this->bot = $bot;
    }

    /**
     * @param string|null $message
     * @param Update      $update
     *
     * @return mixed
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function handleNextCommand($message, Update $update)
    {
        $this->update = $update;
        if ($this->nextMethod !== null) {
            $methodName = $this->nextMethod;
            $this->nextMethod = null;

            $method = new ReflectionMethod($this, $methodName);
            if (count($method->getParameters()) && $method->getParameters()[0]->isArray()) {
                $message = array_filter(explode(',', $message), function ($item) {
                    return $item !== '';
                });
            }

            return call_user_func_array([$this, $methodName], [$message]);
        }

        return null;
    }

    /**
     * @param string $argumentsCommandPart
     * @param Update $update
     *
     * @return mixed
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function handleCommand(string $argumentsCommandPart, Update $update)
    {
        $this->update = $update;
        $arguments = [];
        $argumentsParts = explode(' ', $argumentsCommandPart);
        $quoteIsOpen = false;
        while ($argumentPart = array_shift($argumentsParts)) {
            $firstSymbol = mb_substr($argumentPart, 0, 1);
            $lastSymbol = mb_substr($argumentPart, -1);
            if (($firstSymbol === '"' || $firstSymbol === '«') && $quoteIsOpen === false) {
                $quoteIsOpen = true;
                $argumentPart = ltrim($argumentPart, '"«');
                array_push($arguments, $argumentPart);
            } elseif ($quoteIsOpen === true) {
                if ($lastSymbol === '"' || $lastSymbol === '»') {
                    $quoteIsOpen = false;
                    $argumentPart = rtrim($argumentPart, '"»');
                }
                array_push($arguments, array_pop($arguments) . ' ' . $argumentPart);
            } else {
                array_push($arguments, $argumentPart);
            }
        }

        $method = new ReflectionMethod($this, 'run');
        foreach ($method->getParameters() as $index => $parameter) {
            if ($parameter->isArray() && isset($arguments[$index])) {
                $arguments[$index] = array_filter(explode(',', $arguments[$index]), function ($item) {
                    return $item !== '';
                });
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

    /**
     * Returns a simple configured bot
     *
     * @return TelegramBot
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function getSimpleBot(): TelegramBot
    {
        return TelegramBot::create()
            ->setPrivateFor($this->update->getMessage()->getFrom()->getId())
            ->setToken($this->bot->getToken())
            ->setProxy($this->bot->getProxy());
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

    /** @noinspection PhpUnused */
    public static function getAlias(): ?string
    {
        return static::$alias;
    }

    /**
     * @param string $nextMethod
     */
    protected function setNextMethod(string $nextMethod)
    {
        $this->nextMethod = $nextMethod;
    }

}
