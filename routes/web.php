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

Auth::routes();

//Home
Route::get('/home', 'HomeController@showHome')->name('home');


//Users events
Route::any('interest/{id}', ['as' => 'interest-check', 'uses' => 'UserEventController@checkInterest']);
Route::get('willbe/{id}', ['as' => 'will-check', 'uses' => 'UserEventController@checkWill']);


Route::get('/oldEvents', 'UserEventController@showOldEvents')->name('userOldEvent');
Route::get('/events', 'UserEventController@showAllUserEvent')->name('userEvents');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


