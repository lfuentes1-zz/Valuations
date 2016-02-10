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

Route::get('/', 'HomeController@homePage');
Route::post('/additional_information', 'HomeController@edit');

Route::get('/thank_you', 'HomeController@thankYou');

Route::resource('/prospects', 'ProspectsController'); 



// TODO:  Are the HomeController methods get or post