<?php

namespace App\Logging\Loggers;

use App\Logging\LoggerInterface;
use Illuminate\Support\Facades\File;

class FileLogger implements LoggerInterface
{
    private $filePath;
    private $type = 'file';

    public function __construct()
    {
        $this->filePath = storage_path('logs/custom.log');
    }

    public function send(string $message): void
    {
        File::append($this->filePath, $message . PHP_EOL);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $this->send($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
