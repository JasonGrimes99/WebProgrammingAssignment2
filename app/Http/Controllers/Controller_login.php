<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Validator;
use DB;

class Controller_login extends Controller
{
    /*
    function index(){
        return view('index');
    }

    function checkLogin(Request $request){
        $this->validate($request, [
            'username' => 'required|username',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'username' => $request->post('input_username'),
            'password' => $request->post('input_password')
        );

        if(Auth::attempt($user_data)){
            return redirect('profile');
        } else {
            return redirect('messages');
        }
    }

    function successLogin(){
        return view('main');
    }

    function logout(){
        Auth::logout();
        return redirect('messages');
    }
    */

    function checkLogin(Request $request){
        $user_input_email = ($request->input('input_email'));
        $user_input_password = ($request->input('input_password'));

        $student_email = DB::table('student_table')->where('Email', $user_input_email)->value('Email')->where('Password', $user_input_password)->value('Password');
        $lecturer_email = DB::table('lecturer_table')->where('Email', $user_input_email)->value('Email');
        $admin_email = DB::table('admin_table')->where('Email', $user_input_email)->value('Email');

        if (isset($student_email) || isset($lecturer_email) || isset($admin_email)){
            echo "asd";
        } else {
            echo "aaaaaaaa";
        }

    }
}