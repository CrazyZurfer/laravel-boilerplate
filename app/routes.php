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

Route::get('/', function()
{
	return View::make('hello');
});

/**
 *  User management
 */
// Login
Route::get('/login', array(
	'as' => 'login',
	'uses' => 'UserController@getLogin'
));

Route::post('/login', array(
	'as' => 'login',
	'uses' => 'UserController@postLogin'
));

// logout
Route::get('/logout', array(
	'as' => 'logout',
	'uses' => 'UserController@logout'
));

// remind my password