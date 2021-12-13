<?php 
session_start();

/* CHECKS PROTOCOL */
define('URL_PROTOCOL', isset($_SERVER['HTTPS']) ? 'https' : 'http');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','foodcatering_sitecms');

define('URL', URL_PROTOCOL.'://localhost/foodcatering/');
define('ROOT', realpath(dirname(__FILE__) . '/') . '/');
define('LIBS','libraries/');
define('PLUGINS',ROOT.'plugins/');
define('ACTIVE_THEME','foodcatering');
define('PATH',__DIR__.'/../assets/');

