<?php

namespace App\Http\Controllers\Test;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

class QrcodeController extends Controller
{
    //
    public function index ()
    {
        BaconQrCodeGenerator::generate('');
    }
}
