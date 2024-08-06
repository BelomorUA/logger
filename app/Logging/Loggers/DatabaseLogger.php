<?php

namespace App\Logging\Loggers;

use App\Logging\LoggerInterface;
use Illuminate\Support\Facades\DB;

class DatabaseLogger implements LoggerInterface
{
    private $type = 'database';

    public function send(string $message): void
    {
        DB::table('logs')->insert([
            'message' => $message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
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
