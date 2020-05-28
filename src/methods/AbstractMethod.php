<?php

namespace TelegramBot\methods;

use TelegramBot\ConfigurableComponent;
use TelegramBot\exceptions\RequestExecutionError;
use TelegramBot\exceptions\ResultClassIsNotSpecifiedException;
use TelegramBot\helpers\HttpHelper;
use TelegramBot\TelegramBot;

abstract class AbstractMethod extends ConfigurableComponent
{
    const URL_PREFIX = 'https://api.telegram.org/bot';

    protected $resultClass;

    protected $resultIsArray = false;

    public function run(TelegramBot $bot)
    {
        if (!$this->resultClass) {
            throw new ResultClassIsNotSpecifiedException(get_called_class());
        }

        $url = self::URL_PREFIX . $bot->getToken();
        $url .= '/' . $this->getMethodName();
        $result = HttpHelper::post($url, $this->toQuery());
        $data = @json_decode($result, true);
        if (!$data || !$data['ok']) {
            throw new RequestExecutionError(json_last_error_msg() . ': ' . $result);
        }

        $result = [];
        foreach ($this->resultIsArray ? $data['result'] : [$data['result']] as $resultItem) {
            if (!is_array($resultItem)) {
                $resultItem = ['value' => $resultItem];
            }
            $result[] = call_user_func([$this->resultClass, 'create'], $resultItem);
        }

        return $this->resultIsArray ? $result : $result[0];
    }

    private function getMethodName(): string
    {
        return lcfirst(array_reverse(explode('\\', get_called_class()))[0]);
    }
}
