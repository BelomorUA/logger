<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LogService;

class HomeController extends Controller
{

    public function index()
    {
        LogService::log('This log written from HomeController::index()');
        return view('welcome');
    }
}
