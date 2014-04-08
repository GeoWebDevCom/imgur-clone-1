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


Route::get('/pizza', function()
{
	return View::make("other");
});



Route::get('/hamburger', function()
{
	return '<html><h1>I love hamburgers too <\h1><\html>';
});

Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

Route::get('/login', function()
{
	return View::make('forms.userForm');
});



Route::post('/login', function()
{
	return'User has been logged in';
});

Route::get('/test', function(){
	return View::make('test');
});


