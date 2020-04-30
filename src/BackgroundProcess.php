<?php

namespace TelegramBot;

use DateInterval;
use DateTime;

/**
 * Class BackgroundProcess
 *
 * @method $this setBot(TelegramBot $bot) Sets a bot
 * @method TelegramBot getBot Gets a bot
 *
 * @author Yuri Nazarenko / rezident <m@rezident.org>
 */
abstract class BackgroundProcess extends ConfigurableComponent
{
    private $processId;

    /**
     * Runs a process in background
     *
     * @return $this
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function runBackground()
    {
        $this->processId = uniqid();
        $processSign = $this->processId . ' ' . md5(static::class);
        putenv('TELEGRAM_BACKGROUND_COMMAND="' . base64_encode(serialize($this)) . '"');
        exec('nohup ' . __DIR__ . '/run-in-background.php ' . $processSign . ' > /dev/null &');

        return $this;
    }

    /**
     * Checks if a process is running
     *
     * @return bool
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function isRunning(): bool
    {
        return mb_strpos(`ps aux`, $this->processId) !== false;
    }

    /**
     * Checks is any process with the same class is running
     *
     * @return bool
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public static function anyIsRunning(): bool
    {
        return mb_strpos(`ps aux`, md5(static::class)) !== false;
    }

    /**
     * Kills all of background processes
     *
     * @param string|null $hash
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public static function killAll(string $hash = null)
    {
        $hash = $hash ?? md5(static::class);
        foreach (explode(PHP_EOL, `ps ax`) as $processItem) {
            $processItem = trim($processItem);
            if (
                preg_match('/^\d+/', $processItem, $matches) === 1
                && mb_strpos($processItem, $hash) !== false) {
                $cmd = "kill {$matches[0]}";
                `$cmd`;
            }
        }
    }

    /**
     * Waits for N seconds
     *
     * @param int $seconds
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    protected function waitFor(int $seconds)
    {
        if ($seconds > 0) {
            $targetTime = time() + $seconds;
            while (($restOfTime = $targetTime - time()) > 10) {
                sleep($restOfTime / 2);
            }

            sleep($restOfTime);
        }
    }

    /**
     * Waits for defined time
     *
     * @param DateTime $dateTime
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    protected function waitForTime(DateTime $dateTime)
    {
        $this->waitFor($dateTime->getTimestamp() - (new DateTime())->getTimestamp());
    }

    /**
     * Waits for defined interval
     *
     * @param DateInterval $dateInterval
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    protected function waitForInterval(DateInterval $dateInterval)
    {
        $this->waitForTime((new DateTime())->add($dateInterval));
    }

    abstract public function run();
}
