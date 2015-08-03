<?php
$DB_HOST = 'mysql:host=127.0.0.1';
$DB_NAME = 'employees';
$USER = 'codeup';
$PASS = 'rocks';
/*define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'codeup');
define('DB_PASS', 'rocks');*/
require_once 'db_connect.php';
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL "\n";
