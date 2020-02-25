<?php

namespace TelegramBot\types;

use ReflectionClass;
use TelegramBot\ConfigurableComponent;
use TelegramBot\helpers\StringHelper;

class AbstractType extends ConfigurableComponent
{
    public function __construct(array $config = [])
    {
        $docComment = (new ReflectionClass($this))->getDocComment();
        preg_match_all('/@method\s(\w+)\s(\w+)/', $docComment, $matches);
        foreach ($matches[1] as $index => $type) {
            if ($type[0] >= 'A' && $type[0] <= 'Z') {
                $field = StringHelper::toSnake(substr($matches[2][$index], 3));
                $className = '\\TelegramBot\\types\\' . $type;
                $config[$field] = call_user_func([$className, 'create'], $config[$field]);
            }
        }

        parent::__construct($config);
    }

}