<?php

/*
|--------------------------------------------------------------------------
| Bundle Home Route
|--------------------------------------------------------------------------
*/

$bundle_route = '(:bundle)/';

if(Config::get('auth::config.bundle_route') != ''){
	Route::get($bundle_route, function(){ echo 'hooray'; });
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

$logout_route = $bundle_route . Config::get('auth::config.signup_route');

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

Route::get('testing', function(){
	//$new = Bundle::get('auth');
	//echo $new["handles"];
});
/*
|--------------------------------------------------------------------------
| Bundle Dashboard Route
|--------------------------------------------------------------------------
*/

if(Config::get('auth::config.dashboard_route') != ''){
	
	if (Auth::guest()){
		return Redirect::to(Config::get('auth::config.login_route'));
	} else {
		return Redirect::to(Config::get('auth::config.dashboard_route'));
	}

} else {

	Route::get('(:bundle)/dashboard', array('before' => 'auth', function(){ 
		return View::make('auth::dashboard.index'); 
	}));

}


/*
|--------------------------------------------------------------------------
| Authentication filter.
|--------------------------------------------------------------------------
*/

Route::filter('auth', function()
{
    if (Auth::guest()){

    	// If the user is not logged in then redirect them to the login page

		return Redirect::to(Config::get('auth::config.login_route'));

	} else {
		
		// If the user has entered their own dashboard route, then
		// redirect to that custom dashboard route

		if(Config::get('auth::config.dashboard_route') != ''){
			
			return Redirect::to(Config::get('auth::config.dashboard_route'));
		
		} else {
		
			return View::make('auth::dashboard.index');

		}
	}
});
