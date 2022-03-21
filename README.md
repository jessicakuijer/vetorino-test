
Requirements
=============
- PHP 5.5 or newer (I use 7.4)
- A database. I use Docker in this repo for now, but others should work as well. [Check out the RedBean documentation for that](http://redbeanphp.com/index.php?p=/connection).

Installation
=============

1. Install Lagan and its dependencies with [Composer](https://getcomposer.org/) with this command: `composer install`  

2. The Composer script creates the *cache* directory, *config.php* file and RedBean *rb.php* file for you.

3. copy config-sample and rename it by *config.php* with:
- your database settings
- your server paths
- the admin user(s) and their password(s)
- example : 
```php
<?php

/**
 * This file contains the settings for your database, error reporting
 * and different paths and URL to your Lagan app.
 * Add your database and path info and rename it to config.php for your app to work.
 */

/**
 * @var string[] An array with your MySQL database configuration.
 */
$db_config = array(
	'servername'	=> '127.0.0.1',
	'username'		=> 'root',
	'password'		=> 'password',
	'database'		=> 'vetorino'
);

/**
 * @var string[] An array with admin usernames (key) and their passwords (value).
 */
$users = array(
	'admin'	=> 'admin'
);

/**
 * @var string[] An array of the paths protected by the user password combination.
 */
$protected = array(
	'/admin'
);

/**
 * @const ERROR_REPORTING Enable or disable error reporting.
 */
define('ERROR_REPORTING', true);

/**
 * @const ROOT_PATH The server path to the root directory of your Lagan app (Should not have a trailing slash).
 */

define('ROOT_PATH', '/Users/jkuijer/Documents/vetorino-test');
/**
 * @const APP_PATH The server path to the public directory of your Lagan app (Should not have a trailing slash).
 */
define('APP_PATH', '/Users/jkuijer/Documents/vetorino-test/public');
/**
 * @const APP_URL The URL of your Lagan app (Should not have a trailing slash).
 */
define('APP_URL', '/');
?>
```

Lagan uses [Slim HTTP Basic Authentication middleware](http://www.appelsiini.net/projects/slim-basic-auth) to authenticate users for the admin interface. Make sure to change the password in *config.php*, and use HTTPS to login securely.

4. Open docker core and launch the database with this command: `docker compose up`

5. Open server with this command: `php -S localhost:8000 -t public`

6. connect to admin by route /admin, enter login and password: `admin / admin`



Use Lagan (more info)
=========
[Lagan docs](https://www.laganphp.com/#methods-of-a-lagan-model)

