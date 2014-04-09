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

//Default
Route::get('/', function()
{
	return View::make('hello');
});

//Template Default (User View) | Admin (Admin Dashboard)
Route::get('blank/default', function()
{
	return View::make('blank_default');
});
Route::get('blank/admin', function()
{
	return View::make('blank_admin');
});

//404 Error
App::missing(function($exception)
{
    return "404";
});
