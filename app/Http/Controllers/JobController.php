<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    //
    public function processQueue()
    {
        $emailJob = new SendWelcomeEmail(['name' => 'toinv123444', 'email' => 'toi.nguyen@sotatek.com']);
        dispatch($emailJob);
    }
}
