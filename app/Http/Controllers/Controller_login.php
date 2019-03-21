<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use DB;

class Controller_login extends Controller
{
    function checkLogin(Request $request){
        $user_input_email = ($request->input('input_email'));
        $user_input_password = ($request->input('input_password'));

        $student_email = DB::table('student_table')->where('Email', $user_input_email)->where('Password', $user_input_password)->value('Student_ID');
        $lecturer_email = DB::table('lecturer_table')->where('Email', $user_input_email)->where('Password', $user_input_password)->value('Lecturer_ID');
        $admin_email = DB::table('admin_table')->where('Email', $user_input_email)->where('Password', $user_input_password)->value('Admin_ID');

        echo $student_email;
        echo $lecturer_email;
        echo $admin_email;

        if(($student_email || $lecturer_email || $admin_email) > 0){ // login in (create sessions here)
            echo "yes";




        } else { // don't log in, redirect and display error
            $error_message = "Issue with login, check email or password";
            return view('index', ['error_message' => $error_message]);
        }


    }
}