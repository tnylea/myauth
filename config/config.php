<?php
 
return array(
	'login_route' => 'login',
	'logout_route' => 'logout',
	'signup_route' => 'signup',
	'dashboard_route' => 'dashboard',

	'bundle_route' => Bundle::get('auth')['handles'],
);