<?php

namespace TelegramBot;

class Process
{
    /**
     * @var string
     */
    private $runCommand;

    /**
     * @var array[]
     */
    private $parameters = [];

    /**
     * Resource of process
     * @var resource
     */
    private $resource;

    /**
     * Pipes of process
     * @var resource[]
     */
    private $pipes;

    /**
     * @var string
     */
    private $stdOut = '';

    /**
     * @var string
     */
    private $stdErr = '';

    /**
     * Exit code of process
     * @var int
     */
    private $exitCode;

    public function __construct(string $runCommand)
    {
        $this->runCommand = $runCommand;
    }

    /**
     * Adds parameters to command line
     *
     * @param array $parameters
     *
     * @return $this
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function addParameters(array $parameters): Process
    {
        $this->parameters[] = $parameters;

        return $this;
    }

    /**
     * Runs the process
     *
     * @param bool $sync
     *
     * @return $this
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function run(bool $sync = false): Process
    {
        $cmd = [$this->runCommand];
        foreach ($this->parameters as $parameters) {
            if (!isset($parameters[0])) {
                $parametersItems = [];
                foreach ($parameters as $parameter => $value) {
                    $parametersItems[] = $parameter;
                    $parametersItems[] = '"' . $value . '"';
                }
            } else {
                $parametersItems = $parameters;
            }
            $cmd = array_merge($cmd, $parametersItems);
        }

        $cmd = implode(' ', $cmd);

        $descriptors = [
            0 => ["pipe", "r"],
            1 => ["pipe", "w"],
            2 => ["pipe", "w"]
        ];

        $this->resource = proc_open($cmd, $descriptors, $this->pipes);

        stream_set_blocking($this->pipes[0], false);
        stream_set_blocking($this->pipes[1], false);
        stream_set_blocking($this->pipes[2], false);

        if ($sync) {
            /** @noinspection PhpStatementHasEmptyBodyInspection */
            while ($this->checkProcess()) {
            }
        }

        return $this;
    }

    /**
     * Checks process if it is running
     *
     * @return bool
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function checkProcess(): bool
    {
        $this->readPipes();

        $status = proc_get_status($this->resource);
        if ($status['running'] == false) {
            if ($this->exitCode === null) {
                $this->exitCode = $status['exitcode'];
            }

            fclose($this->pipes[0]);
            fclose($this->pipes[1]);
            fclose($this->pipes[2]);
            proc_close($this->resource);
            $this->resource = null;
            $this->pipes = null;

            return false;
        }

        return true;
    }

    /**
     * Returns last stdout data of process
     *
     * @return string[]
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function getLastStdOut(): string
    {
        $this->readPipes();
        $stdOut = $this->stdOut;
        $this->stdOut = '';

        return $stdOut;
    }

    /**
     * Returns last stderr data of process
     *
     * @return string[]
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function getLastStdErr(): string
    {
        $this->readPipes();
        $stdErr = $this->stdErr;
        $this->stdErr = '';

        return $stdErr;
    }

    /**
     * Returns an exit code or null, if process is working
     *
     * @return int|null
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function getExitCode()
    {
        return $this->exitCode;
    }

    /**
     * Returns if exit code is 0
     *
     * @return bool
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public function exitIsOk(): bool
    {
        return $this->exitCode === 0;
    }

    /**
     * Creates an instance of process
     *
     * @param string $runCommand
     *
     * @return Process
     *
     * @author Yuri Nazarenko / rezident <m@rezident.org>
     */
    public static function create(string $runCommand): Process
    {
        return new static($runCommand);
    }

    private function readPipes()
    {
        while ($data = fread($this->pipes[1], 8192)) {
            $this->stdOut .= $data;
        }

        while ($data = fread($this->pipes[2], 8192)) {
            $this->stdErr .= $data;
        }
    }

}
