<?php 
session_start();

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','foodcatering_sitecms');

define('URL', 'http://localhost/foodcatering/admin/');
define('ROOT', realpath(dirname(__FILE__) . '/../') . '/admin/');
define('FRONTEND_ROOT',realpath(dirname(__FILE__) . '/../'));
define('FRONTEND_URL', rtrim('http://localhost/foodcatering/','/'));
define('LIBS','libraries/');
define('ACTIVE_THEME','foodcatering');
define('PATH',__DIR__.'/../assets/');

define('PATCH_SOURCE', 'http://cmsupdates.kb.sg/cms-patcher/');

