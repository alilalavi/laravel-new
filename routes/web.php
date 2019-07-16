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

use App\Role;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ali' , function (){
    return User::all();
});

Route::get('ali2' , function (){
    return Role::all();
});
Route::get('home' , 'HomeController@index');
Route::get('a' , 'HomeController@home');
Route::get('al' , 'HomeController@create');
