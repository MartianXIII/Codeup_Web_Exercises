<?php
require_once 'Log.php';
$test = new Log();
$test->date = date("Y-m-d");
$test->filename = "log-{$test->date}.log";
$test->info("Login Successful");
$test->error("Login failed");
$test->logMessage("INFO", "log message");
?>