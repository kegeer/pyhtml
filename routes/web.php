<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/hire', 'PageController@hire');
Route::get('/partner', 'PageController@partner');
Route::get('/microbiome', 'PageController@microbiome');
Route::get('/pathogen', 'PageController@pathogen');
Route::get('/baba', 'PageController@baba');
Route::get('/baby', 'PageController@baby');
Route::get('/mum', 'PageController@mum');
Route::get('/obesity', 'PageController@obesity');
Route::get('/cardio', 'PageController@cardio');
Route::get('/diabetes', 'PageController@diabetes');

Auth::routes();

Route::get('/home', 'HomeController@index');
