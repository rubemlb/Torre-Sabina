<?php
/*
 * $loader needs to be a relative path to an autoloader script.
 * Swift Mailer's autoloader is swift_required.php in the lib directory.
 * If you used Composer to install Swift Mailer, use vendor/autoload.php.
 */
$loader = 'vendor/autoload.php';

require_once $loader;

/*
 * Login details for mail server
 */
$smtp_server = 'smtp.gmail.com';
$username = 'e-turismo.cv@primeconsulting.org';
$password = 'wkmhmdxltweeltqa';

/*
 * Email addresses for testing
 * The first two are associative arrays in the format
 * ['email_address' => 'name']. The rest contain just
 * an email address as a string.
 */
$from = [$username];
$test1 = [];
$testing = '';
$test2 = '';
$test3 = '';
$secret = '';
$private = '';
