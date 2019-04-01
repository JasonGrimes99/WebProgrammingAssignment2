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
        $meetingResults = DB::table('users')->join('meetings', 'users.id', '=', 'meetings.meet_to')->select('name', 'meet_location', 'meet_time', 'meet_date')->get();
        return view('meeting', ['meetingResults' => $meetingResults]);
    }

}
