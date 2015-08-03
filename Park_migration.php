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

$dbc->exec('DROP TABLE IF EXISTS `national_parks`');

$dbc->exec($createTable);
$createTable = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE(12,2) NOT NULL,
    PRIMARY KEY (id))';
 ?>
