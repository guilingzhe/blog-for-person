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

Route::get('/','IndexController@index');
Route::get('/archive','IndexController@archive');
Route::get('/contact','IndexController@contact');
Route::get('/single','IndexController@single');
Route::get('/admin','IndexController@login');
Route::post('/admin','IndexController@postLogin');
Route::get('/register','IndexController@register');
Route::resource('pho','PhotoController');