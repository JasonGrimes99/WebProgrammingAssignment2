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

    function checkLogin($email, $password){
        $student_email = DB::select('SELECT * FROM student_table WHERE Email = $email');
        $lecturer_email = DB::select('SELECT * FROM lecturer_table WHERE Email = $email');
        $admin_email = DB::select('SELECT * FROM admin_table WHERE Email = $email');

        if($student_email || $lecturer_email || $admin_email){
            return redirect('profile');
        } else {
            return redirect('profile');
        }
    }

    function checkText(Request $request){
        $user_input_email = ($request->input('input_email'));
        $user_input_password = ($request->input('input_password'));
        echo $user_input_email;
        echo $user_input_password;

        $student_email = DB::select('SELECT * FROM student_table WHERE Email = "$user_input_email"');
        $lecturer_email = DB::select('SELECT * FROM lecturer_table WHERE Email = "$user_input_email"');
        $admin_email = DB::select('SELECT * FROM admin_table WHERE Email = "$user_input_email"');

        $student_email_result = mysqli_num_rows($student_email);

        echo $student_email_result;

        /*
        if($student_email_result > 0){
            echo "yes";
        } else {
            echo "no";
        }
        */


    }
}