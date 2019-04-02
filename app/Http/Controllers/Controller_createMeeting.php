<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;

class Controller_createMeeting extends Controller
{

    function create(Request $request){

        $from = Auth::id();
        $to = $request->input('meet_to');
        $location = $request->input('meet_location');
        $time = $request->input('meet_time');
        $date = $request->input('meet_date');
        $date = date('Y-m-d');

        DB::insert("INSERT INTO meetings (meet_from, meet_to, meet_location, meet_time, meet_date) VALUES ( '$from' , '$to', '$location', '$time', '$date')");
        return redirect('meeting');
    }

}
