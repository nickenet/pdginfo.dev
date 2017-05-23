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
//Home
Route::get('/', function () {
    return view('main');
});

//Admin
Route::get('admin' , 'AdminController')->name('admin');


Auth::routes();

Route::get('/home', 'HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');
