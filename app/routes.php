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


Route::get('/base',function(){
	return View::make('base');
});

Route::group(array('prefix' => 'user'), function() {

	Route::get('/{id}', function($id)
	{
	    return 'User '.$id;
	});

});

Route::get('cat_asset', function(){
	return URL::asset('img/cat.jpg');
});

Route::get('/cat', function(){
	return View::make('CatView');
});

Route::get('/test', function(){
	return View::make('test');
});


Route::post("/upload", array(
    "before" => "auth",
    "uses"   => "UploadController@preview"
));

Route::get('/mypics', array(

   "before" => "auth",
    "uses"   => "UploadController@mypics"
));


Route::get('dashboard', array('before'=> 'auth',function()
{
		return View::make('dashboard');
}));

Route::get("/", array(
    "before" => "guest",
    "uses"   => "RegistrationController@index"
));

Route::post("/signup", array(
    "before" => "csrf",
    "uses"   => "RegistrationController@createUser"
));






/*Logging Routes*/
Route::get('/login', function()
{
	return View::make('login');
});

Route::post('/login', function()
{
	// Validation later - for now let’s just get the creds
	Auth::attempt( 
		array(
			'username' => Input::get('username'), 
			'password' => Input::get('password')
		) 
	);

	return Redirect::to('dashboard');
});

Route::get('/logout', function()
{
	Auth::logout();
	
	return View::make('logout');
	});


 Route::get('/my/long/route/', array(
	 'as' => 'calendar',
 	function() {
 	return View::make('calendar');
 }
 ));

Route::get('/crime', array(){
	return View::make('crime');
});


