<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class dbController extends Controller
{
    function NameGrabber()
    {
      //  $studentName = DB::table('admin_table')->where('First_Name', $name);
        $studentName = DB::select('SELECT * from student_table');
        return view('meetings', ['studentName' => $studentName]);
    }


    //
}
