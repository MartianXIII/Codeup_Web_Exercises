<?php

require_once '../usermodel.php';

//$user = user::find(1)
$user = user::all();
var_dump($user);
?>
