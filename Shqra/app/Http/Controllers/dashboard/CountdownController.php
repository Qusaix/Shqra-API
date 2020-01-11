<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Countdown;

class CountdownController extends Controller
{
    public function index()
    {
        $countdown = Countdown::find(1);

        return view('dashboard.countdown.index',compact('countdown'));
    }
}
