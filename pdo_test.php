<?php
/*$DB_HOST = 'mysql:host=127.0.0.1';
$DB_NAME = 'employees';
$USER = 'codeup';
$PASS = 'rocks';*/
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', '');
require_once 'db_connect.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
