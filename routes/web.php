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
    return view('master');
});
Route::get('/','PageController@index')->name('page.index');
Route::get('/about','PageController@about')->name('page.about');
Route::get('/cooking','PageController@cooking')->name('page.cooking');
Route::get('/contact','PageController@contact')->name('page.contact');
