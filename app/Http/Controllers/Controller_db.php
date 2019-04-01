<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class Controller_db extends Controller
{
    function NameGrabber()
    {
        $studentName = DB::select('SELECT * from users');
        return view('meeting', ['studentName' => $studentName]);
    }

    function getMeetings(){
        $user = Auth::id();
        $meetingResults = DB::table('meetings')->select('meet_to', 'meet_location', 'meet_time', 'meet_date')->where('meet_from', $user)->get();
        return view('meeting', ['meetingResults' => $meetingResults]);
    }

}
