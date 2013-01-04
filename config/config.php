<?php

$bundle = Bundle::get('myauth');
 
return array(

	// Routes for our authentication

	'login_route' => 'login',
	'logout_route' => 'logout',
	'signup_route' => 'signup',

	// Login the user and redirect them to this route
	'login_redirect' => '',
	
	'bundle_route' => $bundle['handles'],
);