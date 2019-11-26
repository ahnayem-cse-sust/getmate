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
//    return view('home.land');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/editProfile', 'UserController@edit')->name('editProfile');
Route::post('/storeProfile', 'UserController@store')->name('storeProfile');
Route::get('/userList', 'UserController@list')->name('userlist');
Route::get('/activate/{id}', 'UserController@activate')->name('activate');
Route::get('/deactivate/{id}', 'UserController@deactivate')->name('deactivate');
Route::get('/userdetails/{id}', 'UserController@userdetails')->name('userdetails');

Route::get('/upazila', 'UpazilaController@index')->name('upazila');
Route::post('/storeUpazila', 'UpazilaController@store')->name('storeUpazila');
Route::get('/deleteUpazila/{id}', 'UpazilaController@delete')->name('deleteUpazila');

Route::get('/zila', 'zilaController@index')->name('zila');
Route::post('/storeZila', 'zilaController@store')->name('storeZila');
Route::get('/deleteZila/{id}', 'zilaController@delete')->name('deleteZila');
//Route::post('/search', 'HomeController@search')->name('search');
Route::get('/search', 'HomeController@search')->name('search');

Route::get('/blogs', 'BlogController@list')->name('blog');
Route::get('/blog/create', 'BlogController@create')->name('blog.create');
Route::post('/blog/store', 'BlogController@store')->name('blog.store');

#Pages routes
//Route::get('/story', 'BlogController@list')->name('story');
Route::get('/about', 'PageController@aboutUs')->name('about');
Route::get('/contact', 'PageController@contactUs')->name('contact');
Route::post('/contact', 'SendEmailController@send')->name('contactmail');

// Route::post('/contact',function(Request $request){
//     Mail::send(new SendEmail($request));
//     return redirect('/');
// });
