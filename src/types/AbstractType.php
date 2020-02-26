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
        preg_match_all('/@method\s([\w\[\]]+)\s(\w+)/', $docComment, $matches);
        foreach ($matches[1] as $index => $type) {
            if ($type[0] >= 'A' && $type[0] <= 'Z') {
                $field = StringHelper::toSnake(substr($matches[2][$index], 3));
                if (isset($config[$field]) == false) {
                    continue;
                }
                $className = '\\TelegramBot\\types\\' . $type;
                if (substr($type, -1) == ']') {
                    $className = substr($className, 0, -2);
                    foreach ($config[$field] as &$value) {
                        $value = call_user_func([$className, 'create'], $value);
                    }
                } else {
                    $config[$field] = call_user_func([$className, 'create'], $config[$field]);
                }
            }
        }

        parent::__construct($config);
    }

}
