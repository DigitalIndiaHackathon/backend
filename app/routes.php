<?php
Route::any('/api', array('uses' => "HomeController@api"));

if (App::environment() !== "local" && App::environment() !== "staging") {
	App::error(function($exception, $code) {
		switch ($code) {
			case 403 :
			return Response::view('errors.404', array(), 403);

			case 404 :
			return Response::view('errors.404', array(), 404);

			case 500 :
			return Response::view('errors.404', array(), 500);

			default :
			return Response::view('errors.404', array(), $code);
		}
	});
}


/**
 * Tests a route against the current URL for active state
 * If true, returns 'active' for class name
 * @param string $route The route name to test
 * @param array $params The route params
 * @param boolean $nested If true, returns active state for parents of the child routes
 * @param string $class The class to use
 * @return string The active state class
 * Usage: HTML::activeState('named.route', array(param), true|false, 'class')
 */
HTML::macro('activeState', function($route, $params = array(), $nested = false, $class = 'active') {
	if(!$nested){
		return Request::url() === route($route, $params) ? $class : '';
	}
	else{
		return strpos(Request::url(), route($route, $params)) !== false ? $class : '';
	}
});

Route::get('/', function()
{
	return View::make('splash');
});

Route::get('register', function()
{
	return Redirect::to('http://eepurl.com/ceg2nP');
});
//

// //Auth Routes
// Route::group(array('prefix' => "auth"), function(){

// 	Route::group(array('before' => "guest"), function(){
// 		Route::get('users/create', array('uses' => 'UsersController@create', 'as' => "auth.signup"));
// 		Route::post('users', array('uses' => 'UsersController@store', 'as' => "auth.signup.post"));
// 		Route::get('users/login', array('uses' => 'UsersController@login', 'as' => "auth.login"));
// 		Route::post('users/login', array('uses' => 'UsersController@doLogin', 'as' => "auth.login.post"));
// 		Route::get('users/confirm/{code}', array('uses' => 'UsersController@confirm', 'as' => "auth.confirm"));
// 		Route::get('users/forgot_password', array('uses' => 'UsersController@forgotPassword', 'as' => "auth.forgot_password"));
// 		Route::post('users/forgot_password', array('uses' => 'UsersController@doForgotPassword', 'as' => "auth.forgot_password.post"));
// 		Route::get('users/reset_password/{token}', array('uses' => 'UsersController@resetPassword', 'as' => "auth.reset_password"));
// 		Route::post('users/reset_password', array('uses' => 'UsersController@doResetPassword', 'as' => "auth.reset_password.post"));
// 	});

// Route::get('users/logout', array('uses' => 'UsersController@logout', 'as' => "auth.logout", 'before' => "auth"));
// });

// //Backend Routes
// Route::group(array('prefix' => "backend", 'before' => "auth"), function(){

// 	Route::resource('challenges', 'ChallengesController');
// 	Route::get('participants', array('uses' => "ParticipantsController@index", 'as' => "backend.participants"));
// 	Route::get('search', array('uses' => "ParticipantsController@search", 'as' => "backend.search"));

// });

// Route::post('queue/push', function(){
// 	return Queue::marshal();
// });
