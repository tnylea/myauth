<?php

/*
|--------------------------------------------------------------------------
| Bundle Home Route
|--------------------------------------------------------------------------
*/

$bundle_route = '(:bundle)/';

if(Config::get('auth::config.bundle_route') != ''){

	Route::get($bundle_route, function(){ 

		if (Auth::guest()){
			return Redirect::to(Config::get('auth::config.bundle_route') . '/' . Config::get('auth::config.login_route'));
		} else {
			if(Config::get('auth::config.login_redirect') != ''){
				return Redirect::to(Config::get('auth::config.login_redirect'));
			} else {
				return View::make('auth::dashboard.index');
			}
		}

	});

}

/*
|--------------------------------------------------------------------------
| Bundle Login Routes
|--------------------------------------------------------------------------
*/

$login_route = $bundle_route . Config::get('auth::config.login_route');

Route::get($login_route, function(){ return View::make('auth::auth.login'); });

Route::post($login_route, 'auth::user@login');

/*
|--------------------------------------------------------------------------
| Bundle Logout Route
|--------------------------------------------------------------------------
*/

$logout_route = $bundle_route . Config::get('auth::config.logout_route');

Route::get($logout_route, function(){ 
	Auth::logout();
	return Redirect::to(Config::get('auth::config.bundle_route') . '/' . Config::get('auth::config.login_route')); 
});


/*
|--------------------------------------------------------------------------
| Bundle Signup Routes
|--------------------------------------------------------------------------
*/

$signup_route = $bundle_route . Config::get('auth::config.signup_route');

Route::get($signup_route, function(){ return View::make('auth::auth.signup'); });

Route::post($signup_route, 'auth::user@signup');


/*
|--------------------------------------------------------------------------
| Bundle Dashboard Route
|--------------------------------------------------------------------------
*/

if(Config::get('auth::config.login_redirect') != ''){
	
		return Redirect::to(Config::get('auth::config.login_redirect'));

} else {

	$dashboard_route = $bundle_route . 'dashboard';

	Route::get($dashboard_route, function(){ 
		if (Auth::guest()){
			return Redirect::to(Config::get('auth::config.bundle_route') . '/' . Config::get('auth::config.login_route'));
		} else {
			return View::make('auth::dashboard.index'); 
		}
	});

}