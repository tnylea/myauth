<?php

$bundle = Bundle::get('auth');
 
return array(
	'login_route' => 'login',
	'logout_route' => 'logout',
	'signup_route' => 'signup',
	'dashboard_route' => 'dashboard',
	'bundle_route' => $bundle['handles'],
);