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
	return View::make('site/index');
});

Route::get('user', function()
{
	return Redirect::to('/');
});

Route::get('user/{name}', 'UserController@showProfile');

Route::get('account', function() {
	if (!Auth::check()) {
		return View::make('site/account/login');
	}
	else {
		return View::make('site/account/account');
	}
});

Route::get('admin', function()
{
	return View::make('admin/index');
});

/*
App::missing(function($exception)
{
    return "Error 404!<br />".$exception;
});
*/
