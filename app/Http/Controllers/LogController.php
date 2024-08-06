<?php

namespace App\Http\Controllers;

use App\Logging\LoggerFactory;
use Illuminate\Http\Request;

class LogController extends Controller
{
    private $logger;

    public function __construct()
    {
        $this->logger = LoggerFactory::create(config('CustomLog.default'));
    }

    public function log(Request $request)
    {
        $message = $request->input('message');
        $this->logger->send($message);
        return response()->json(['status' => 'Message logged successfully']);
    }

    public function logWithType(Request $request, $type)
    {
        $message = $request->input('message');
        $logger = LoggerFactory::create($type);
        $logger->send($message);
        return response()->json(['status' => 'Message logged successfully with ' . $type]);
    }
}
