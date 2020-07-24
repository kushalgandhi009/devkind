<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class logController extends Controller
{
    public function view(){
        $activity = Activity::all();
        return view('log',compact('activity'));
    }
}
