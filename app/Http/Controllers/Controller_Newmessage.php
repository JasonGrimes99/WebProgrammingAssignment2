<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use DB;

class Controller_Newmessage extends Controller
{
    function Newmessagedata()
    {
        $ID= Auth::id();
        $Users= DB::table('users')->get();
        return view('New_message', compact('ID', 'Users'));//allows $ID to be used in the new message view
    }
   // function Allusers(){
   //     $Users= shout::table('users')->get();
   //     return view( 'New_message', compact('Users'));
   // }

}
