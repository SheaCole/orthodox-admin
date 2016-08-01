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

// Pages
Route::get('/', 'Pages@welcome');

Route::get('people', 'Pages@people');

Route::get('people/{slug}', 'Pages@profile');

Route::get('about', 'Pages@about');

Route::get('all', 'Pages@all');

Route::get('todays-saints', 'Pages@todays_saints');


// Saints
Route::get('saints', 'SaintsController@saints');

Route::get('add-saints', 'SaintsController@add_a_saint');

Route::get('saints/json', 'SaintsController@saintsJson');

Route::post('saints', 'SaintsController@add_saints');





