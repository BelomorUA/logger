<?php

namespace App\Logging;

use App\Logging\LoggerFactory;

class LogService
{
    protected $logger;

    public function __construct()
    {
        $this->logger = LoggerFactory::create(config('CustomLog.default'));
    }

    public function log(string $message): void
    {
        $this->logger->send($message);
    }

    public function setLoggerType(string $type): void
    {
        $this->logger = LoggerFactory::create($type);
    }
}
