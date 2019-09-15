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

//Route::get('/', function () {
//    return view('landing.land');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/editProfile', 'UserController@edit')->name('editProfile');
Route::post('/storeProfile', 'UserController@store')->name('storeProfile');
Route::get('/userList', 'UserController@list')->name('userlist');
Route::get('/activate/{id}', 'UserController@activate')->name('activate');
