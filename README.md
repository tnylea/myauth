#MyAuth - A Laravel Authentication Bundle

This bundles is a basic wrapper for the current Authentication system built in Laravel. This bundle includes the User controller, login, signup, and dashboard views. It is very easy to customize and very easy to use.

## Installation

```PHP
php artisan bundle:install myauth
```

After you have added the bundle to your site you'll need to migrate the users table as follows (note: be sure that you have already run ```php artisan migrate:install```)

```PHP
php artisan migrate myauth
```

After you have migrated the user table successfully you'll need to tell your application to auto load the bundle. In your application/bundles.php file add the following line to the return array

```PHP
'myauth' => array('auto' => true),
```

## Testing it out

If everything was successful you should be able to navigate to your APPLICATION_HOST/login/ and you will see a plain email and password login.