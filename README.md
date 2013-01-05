#MyAuth - A Laravel Authentication Bundle

This bundles is a basic wrapper for the current Authentication system built in Laravel. This bundle includes the User controller, login, signup, and dashboard views. It is very easy to customize and very easy to use.

## Installation

To install the bundle, run the following command

```PHP
php artisan bundle:install myauth
```

Next, we need to migrate the users table as follows (note: be sure that you have already run ```php artisan migrate:install```)

```PHP
php artisan migrate myauth
```

After migrating the user table we'll need to tell the application to auto load the bundle. In your application/bundles.php file add the following line to the return array

```PHP
'myauth' => array('auto' => true),
```

## Testing it out

If everything was successful you should be able to navigate to your APPLICATION_HOST/login/ and you will see a plain email and password login.

Other routes that can be accessed in this bundle are:

- APPLICATION_host/login/
- APPLICATION_HOST/signup/
- APPLICATION_HOST/logout/
- APPLICATION_HOST/dashboard/ (only after authentication)

## Configuration

Inside of the myauth/config/config.php file you can change the following code inside of the array to your desired URL routes. (example: instead of APPLICATION_HOST/signup/ perhaps you might want it to be APPLICATION_HOST/register/)

```PHP
return array(

	// Routes for our authentication

	'login_route' => 'login',
	'logout_route' => 'logout',
	'signup_route' => 'signup',

	// Login the user and redirect them to this route
	'login_redirect' => '',
	
	'bundle_route' => $bundle['handles'],
);
```

Additionally you can specify the login_recirect route since you'll probably want to create your own dashboard for the user to see when they login. (warning: Make sure to protect the login_redirect route with an authentication filter) [Find out about the authentication filter here](http://www.laravel.com/docs/auth/usage#filter)

Finally, if you wish to change the URL structure of your authentication route you can add the handles parameter in the 'myauth' array element of the application/bundles.php file

```PHP
'myauth' => array('auto' => true, 'handles' => 'auth'),
```

In this case your routes will now look as follows

- APPLICATION_host/auth/login/
- APPLICATION_HOST/auth/signup/
- APPLICATION_HOST/auth/logout/
- APPLICATION_HOST/auth/dashboard/

