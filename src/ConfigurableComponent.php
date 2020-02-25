<?php

namespace TelegramBot;

use TelegramBot\exceptions\MethodNotFountException;

abstract class ConfigurableComponent
{
    private $fields = [];

    public function __construct(array $config = [])
    {
        $this->fields = array_merge($this->fields, $config);
    }

    public function __call($name, $arguments)
    {
        $methodParts = explode('_', $this->getSnakeString($name));
        $method = array_shift($methodParts);
        $key = implode('_', $methodParts);
        $value = $arguments[0];
        if (method_exists($this, $method) === false) {
            throw new MethodNotFountException($method);
        }

        return $this->{$method}($key, $value);
    }

    /**
     * @param array $config
     *
     * @return $this
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public static function create(?array $config = [])
    {
        if ($config === null) {
            return null;
        }

        return new static($config);
    }

    protected function toArray(): array
    {
        return $this->fields;
    }

    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function get(string $key)
    {
        return $this->fields[$key] ?? null;
    }

    /** @noinspection PhpUnusedPrivateMethodInspection */
    private function set(string $key, $value)
    {
        $this->fields[$key] = $value;

        return $this;
    }

    private function getSnakeString(string $string)
    {
        return preg_replace_callback('/([A-Z])/', function ($symbol) {
            return '_' . strtolower($symbol[1]);
        }, $string);
    }
}