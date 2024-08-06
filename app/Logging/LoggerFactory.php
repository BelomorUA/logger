<?php

namespace App\Logging;

use App\Logging\Loggers\EmailLogger;
use App\Logging\Loggers\DatabaseLogger;
use App\Logging\Loggers\FileLogger;
use App\Logging\Loggers\KibanaLogger;

class LoggerFactory
{
    public static function create(string $type): LoggerInterface
    {
        switch ($type) {
            case 'email':
                return new EmailLogger();
            case 'database':
                return new DatabaseLogger();
            case 'file':
                return new FileLogger();
            case 'kibana':
                return new KibanaLogger();
            default:
                throw new \Exception("Logger type [$type] is not supported.");
        }
    }
}
