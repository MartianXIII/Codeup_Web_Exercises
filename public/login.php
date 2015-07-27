<?php

session_start();//Starting session
require_once "../Input.php";
require_once "../Auth.php";
require_once "functions.php";

//
//
// $uName = isset($_POST['username']) &&htmlspecialchars(strip_tags($_POST['username'] == 'guest'));
// $pass = isset($_POST['password']) &&htmlspecialchars(strip_tags($_POST['password'] == 'qwerty'));
//$sessionId = session_id();//Grab current session id
//$session = []; //Initialize empty session array
// $LOGGED_IN_USER = false;
//var_dump($_POST);
//$name = isset($_POST['name']) ? $_POST['name'] == 'Mars' : '';
//$number = isset($_POST['number']) ? $_POST['number'] == '9099000111' : '';
//phpinfo()
// if (isset($_POST['username']) && isset($_POST['password'])) {

  if($_POST)
  {
    if(Auth::attempt(escape(Input::get('username')), escape(Input::get('password')))) 
    {
        header("Location: authorized.php");
        exit();
    } else {
        echo "FUCKT";
    }

  }
    // if ($uName && $pass) {
/*function endSession () {
  $_session = [];
  if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 9001,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
  }
}
    session_destroy();*/

?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <h2>YO</h2>
    <?php require_once 'functions.php'; ?>
    <!--<?php include_once 'inputHas'; ?> -->

        <form  method="POST">
            <label>Username</label>
            <input type="text" name="username"><br><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <input type="submit">
            <h6>username is 'guest' && password is 'qwerty'</h6>
        </form>
</body>
</html>
