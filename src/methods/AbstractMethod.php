<?php

namespace TelegramBot\methods;

use TelegramBot\ConfigurableComponent;
use TelegramBot\exceptions\RequestExecutionError;
use TelegramBot\exceptions\ResultClassIsNotSpecifiedException;
use TelegramBot\TelegramBot;

abstract class AbstractMethod extends ConfigurableComponent
{
    private const URL_PREFIX = 'https://api.telegram.org/bot';

    protected $resultClass;

    protected $resultIsArray = false;

    public function run(TelegramBot $bot)
    {
        if (!$this->resultClass) {
            throw new ResultClassIsNotSpecifiedException(get_called_class());
        }

        $url = self::URL_PREFIX . $bot->getToken();
        $url .= '/' . $this->getMethodName();
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->toArray());
        $result = curl_exec($curl);
        curl_close($curl);
        $data = @json_decode($result, true);
        if (!$data || !$data['ok']) {
            throw new RequestExecutionError(json_last_error_msg() . ': ' . $result);
        }

        $result = [];
        foreach ($this->resultIsArray ? $data['result'] : [$data['result']] as $resultItem) {
            $result[] = call_user_func([$this->resultClass, 'create'], $resultItem);
        }

        return $this->resultIsArray ? $result : $result[0];
    }

    private function getMethodName(): string
    {
        return lcfirst(array_reverse(explode('\\', get_called_class()))[0]);
    }
}
