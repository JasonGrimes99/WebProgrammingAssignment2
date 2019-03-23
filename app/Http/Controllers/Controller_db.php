<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Controller_db extends Controller
{
    function NameGrabber()
    {
        $studentName = DB::select('SELECT * from student_table');
        return view('meetings', ['studentName' => $studentName]);
    }

}
