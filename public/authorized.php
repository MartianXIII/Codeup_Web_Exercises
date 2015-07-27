<?php
require_once "../Auth.php";
require_once "../Input.php";
session_start();
if (Auth::check())
{
    $Greetings = Auth::user();
} else {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorization, you have 15 seconds to comply</title>
</head>
<body>
    <h2>Mister Mars Martian????</h2>
    <p>Greetings, <?= $Greetings ?>! you Hack!</p>
    <a href="logout.php">Log Out</a>
</body>
</html>
