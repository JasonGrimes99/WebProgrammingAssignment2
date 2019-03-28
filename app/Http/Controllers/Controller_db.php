<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Controller_db extends Controller
{
    function NameGrabber()
    {
        $studentName = DB::select('SELECT * from users');
        return view('meeting', ['studentName' => $studentName]);
    }

    function dataGrabber(){

    }

}
