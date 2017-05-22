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

Route::get('/', 'RegisterController@get')->name('register');
Route::post('/', 'RegisterController@post')->name('register');
Route::get('/activate/{code}', 'RegisterController@activate')->name('activate');

Route::get('/error', function () {
    return view('error');
});
Route::get('/already', function () {
    return view('already_activated');
});

Route::get('/login', function () {
    return redirect('http://rackian.com');
})->name('login');
