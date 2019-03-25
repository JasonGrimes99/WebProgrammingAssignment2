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

    Route::get('', function () {
        return view('auth/login');
    })->name('index');

    Route::get('profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('main', function () {
        return view('main');
    })->name('main');

    Route::get('meetings', function () {
        return view('meetings');
    })->name('meetings');

    Route::get('messages', function () {
        return view('messages');
    })->name('messages');

    Route::get('test', function () {
        return view('test');
    })->name('test');

});


Route::post('index', 'Controller_login@checkLogin');

Route::get('index', 'Controller_login@logout');

Route::get('test','usersController@index'); //the string to put in to the url, and which controller to go with that view

Route::get('meetings','Controller_db@NameGrabber'); // Getting nameGrabber into meetings view


