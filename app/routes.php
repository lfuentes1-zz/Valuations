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

Route::get('/', 'HomeController@create');
Route::post('/', 'HomeController@store');

Route::get('/additional_information/{id}', 'HomeController@edit');
Route::put('/thank_you/{}', 'HomeController@update');

Route::resource('/prospects', 'ProspectsController'); 



// TODO:  Are the HomeController methods get or post