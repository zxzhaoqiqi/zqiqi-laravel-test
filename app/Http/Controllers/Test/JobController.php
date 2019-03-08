<?php

namespace App\Http\Controllers\Test;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

class JobController extends Controller
{
    //
    public function index ()
    {
        SendEmail::dispatch('', '')->onQueue('queue');

//        $queue = Cache::store('queue')->get();
        dd('end');
    }
}
