<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudViewController extends Controller {
    public function index(){
        $users = DB::select('select * from users');
        return view('index',['users'=>$users]);
    }
}