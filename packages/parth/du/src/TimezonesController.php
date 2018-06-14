<?php

namespace Parth\Du;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    //
//    public function index($timezone)
//    {
//        echo Carbon::now($timezone)->toDateTimeString();
//        
//    }
    
    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
//        dd($current_time);
//        exit();
        return view('timezones::time', compact('current_time'));
    }
}
