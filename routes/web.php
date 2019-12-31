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

Route::get('/', function () {
    return view('login');
});


Route::post('loginme','loginController@login');

Route::post('updateme', [ 'as' => 'updateme', 'uses' => 'LoginController@login']);

Route::get('/register', [ 'as' => '/register', 'uses' => 'RegisterController@create']);
Route::post('register', [ 'as' => 'register', 'uses' => 'RegisterController@store']);