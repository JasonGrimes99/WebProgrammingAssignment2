<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('home', function () {
        return view('home');
    })->name('home');

    Route::get('', function () {
        return view('auth/login');
    })->name('index');

    Route::get('profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('main', function () {
        return view('main');
    })->name('main');

    Route::get('meeting', function () {
        return view('meeting');
    })->name('meeting');

    Route::get('meeting2', function () {
        return view('meeting2');
    })->name('meeting2');

    Route::get('messages', function () {
        return view('messages');
    })->name('messages');

    Route::get('createMeeting', function () {
        return view('layouts/createMeeting');
    })->name('createMeeting');

    Route::get('New_message', function() {
     return view( 'New_message');
    })->name('New_message');

    //Route::get('New_message', 'Controller_Newmessage@Allusers');

    Route::get('New_message', 'Controller_Newmessage@Newmessagedata');

    Route::post('createMeeting', 'Controller_createMeeting@create');

    Route::post('meeting', 'Controller_createMeeting@create');

    Route::get('meeting','Controller_db@getMeetings'); // Getting nameGrabber into meetings view

});