<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//The following routes are used in the HomeController
Route::get('/', 'HomeController@create');
Route::post('/', 'HomeController@store');
Route::get('/additional_information/{id}', 'HomeController@edit');
Route::put('/thank_you/{id}', 'HomeController@update');

Route::resource('/prospects', 'ProspectsController'); 

