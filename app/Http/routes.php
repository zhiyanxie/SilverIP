<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'GuestController@index')->middleware('guest');
// Apartment Routes
Route::get('/apartments', 'ApartmentController@index')->name('index');
Route::post('/apartment', 'ApartmentController@store');
Route::delete('/apartment/{apartment}', 'ApartmentController@destroy');
//zxie10 edit
Route::get('/apartment/{apartment}/edit','ApartmentController@edit');
Route::put('/apartment/{apartment}','ApartmentController@update');
Route::get('/apartment/create','ApartmentController@create')->name('create');
// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




