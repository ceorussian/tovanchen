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
Route::group(['middleware' => 'checkLogin'], function () {
    Route::get('/', 'HomeController@home')->name('home');
});


Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin');
Route::get('get-me', 'AuthController@getMe');