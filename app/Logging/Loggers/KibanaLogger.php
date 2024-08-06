<?php

namespace App\Logging\Loggers;

use App\Logging\LoggerInterface;
use Elasticsearch\ClientBuilder;

class KibanaLogger implements LoggerInterface
{
    private $client;
    private $index;
    private $type = 'kibana';

    public function __construct()
    {
        $this->client = ClientBuilder::create()->setHosts([config('logging.kibana.host')])->build();
        $this->index = config('logging.kibana.index');
    }

    public function send(string $message): void
    {
        $params = [
            'index' => $this->index,
            'body' => [
                'message' => $message,
                'timestamp' => now(),
            ],
        ];

        $this->client->index($params);
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
