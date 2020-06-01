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

// リダイレクト処理　middleware('auth')
Route::group(['prefix' => 'admin','middleware' =>'auth'], function(){
    Route::get('work/create','Admin\workController@add');
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
    Route::post('work/create','Admin\workController@create');
    Route::post('profile/create','Admin\ProfileController@create');
});

    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
