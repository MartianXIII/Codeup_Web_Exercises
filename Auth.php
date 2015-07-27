<?php

require_once 'public/Log.php';
class Auth
{

public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
public static $password2 = '$2y$10$Bub11aN8A6yBkXVYP7SXbOWhUdDoR3QQoARIBDpVZ4mw1ARfEDoZa';

public static function attempt($username, $password)
{
  //logged in user vairable
  if($username === 'guest' && (password_verify($password, static::$password) || password_verify($password, static::$password2)))
  {
    $_SESSION['LOGGED_IN_USER'] = $username;
    $loggedIN = new Log;
    $loggedIN->info('whatever i want t type in');
    return true;
  }else
  {
    $notIN = new Log;
    $notIN->info('WHo are you and what are you doing here');
    return false;
  }
}

public static function check()
{
  return isset($_SESSION['LOGGED_IN_USER']) ? true : false;
  //needs boolean
  /*  $userPass = Input::get('password');*/
}
public static function user()
{
  return isset($_SESSION['LOGGED_IN_USER']) ? $_SESSION['LOGGED_IN_USER'] : null;
  //return current logged in user
}
public static function logout()
{
  $_SESSION = array();
  if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
          $params["path"], $params["domain"],
          $params["secure"], $params["httponly"]
      );
  }
  session_destroy();
  header("Location: login.php");
  exit();
}

}
 ?>
