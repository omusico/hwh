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

Route::post('join', 'JoinController@store');
Route::post('subscribe', 'SubscriptionController@store');

Route::get('slate/{which?}', 'PagesController@slate');
Route::get('signup/{which?}', 'PagesController@signup');

Route::get('/{page?}', 'PagesController@index');
//Route::get('/', 'PagesController@index');
//Route::get('confirmation', 'PagesController@confirmation');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
