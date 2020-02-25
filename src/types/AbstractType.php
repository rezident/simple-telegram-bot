<?php

namespace TelegramBot\types;

use TelegramBot\ConfigurableComponent;

class AbstractType extends ConfigurableComponent
{
    protected $nestedCustomFields = [];

    public function __construct(array $config = [])
    {
        foreach ($this->nestedCustomFields as $fieldName => $resultClass) {
            if (isset($config[$fieldName])) {
                $config[$fieldName] = call_user_func([$resultClass, 'create'], $config[$fieldName]);
            }
        }

        parent::__construct($config);
    }
}