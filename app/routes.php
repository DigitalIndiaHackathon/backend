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
	return View::make('splash');
});
//

//Auth Routes
Route::group(array('prefix' => "auth"), function(){

	Route::group(array('before' => "guest"), function(){
		Route::get('users/create', array('uses' => 'UsersController@create', 'as' => "auth.signup"));
		Route::post('users', array('uses' => 'UsersController@store', 'as' => "auth.signup.post"));
		Route::get('users/login', array('uses' => 'UsersController@login', 'as' => "auth.login"));
		Route::post('users/login', array('uses' => 'UsersController@doLogin', 'as' => "auth.login.post"));
		Route::get('users/confirm/{code}', array('uses' => 'UsersController@confirm', 'as' => "auth.confirm"));
		Route::get('users/forgot_password', array('uses' => 'UsersController@forgotPassword', 'as' => "auth.forgot_password"));
		Route::post('users/forgot_password', array('uses' => 'UsersController@doForgotPassword', 'as' => "auth.forgot_password.post"));
		Route::get('users/reset_password/{token}', array('uses' => 'UsersController@resetPassword', 'as' => "auth.reset_password"));
		Route::post('users/reset_password', array('uses' => 'UsersController@doResetPassword', 'as' => "auth.reset_password.post"));
	});

	Route::get('users/logout', array('uses' => 'UsersController@logout', 'as' => "auth.logout", 'before' => "auth"));
});

//Backend Routes
Route::group(array('prefix' => "backend", 'before' => "auth"), function(){
	Route::get('/', array('uses' => 'BackendController@index', 'as' => "backend"));
});