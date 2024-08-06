<?php

namespace App\Logging\Loggers;

use App\Logging\LoggerInterface;
use Illuminate\Support\Facades\Mail;

class EmailLogger implements LoggerInterface
{
    private $email;
    private $type = 'email';

    public function __construct()
    {
        $this->email = config('logging.email');
    }

    public function send(string $message): void
    {
        Mail::raw($message, function ($mail) {
            $mail->to($this->email)->subject('Log Message');
        });
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
