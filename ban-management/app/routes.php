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

Route::get('/test', function()
{
	return View::make('site/test');
});

Route::get('/user/{username?}', function($username = 'Notch')
{
	if ($username) {
		return View::make('site/user')
				->with('username', $username);
	}
	else {
		return View::make('site/index');
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
