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
	'database'		=> 'britline'
);

/**
 * @var string[] An array with admin usernames (key) and their passwords (value).
 */
$users = array(
	'admin'	=> 'password'
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
define('ROOT_PATH', '/Users/abagnis/PhpstormProjects/britline/lagan');
/**
 * @const APP_PATH The server path to the public directory of your Lagan app (Should not have a trailing slash).
 */
define('APP_PATH', '/Users/abagnis/PhpstormProjects/britline/lagan/public');
/**
 * @const APP_URL The URL of your Lagan app (Should not have a trailing slash).
 */
define('APP_URL', '');
?>