<?php

namespace TelegramBot\commands;

use TelegramBot\Command;

/**
 * Show list of commands
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
class Help extends Command
{
    public function run()
    {
        $result = ['```'];
        $commandClasses = $this->bot->getCommandClasses();
        ksort($commandClasses);
        foreach ($commandClasses as $command => $commandClass) {
            $description = call_user_func([$commandClass, 'getDescription']);
            $result[] = ltrim($command, '/') . ' - ' . $description;
        }

        $result[] = '```';

        return [$result, true];
    }

}
