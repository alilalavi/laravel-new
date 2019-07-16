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
    return view('welcome');
});


Route::get('home' , 'HomeController@addPost');
Route::get('hom' , 'HomeController@home');
Route::get('post' , 'postController@index');
Route::get('get' , 'postController@create');
Route::get('pro' , 'HomeController@store');


