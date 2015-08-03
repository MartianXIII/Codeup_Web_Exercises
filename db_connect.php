<?php
/*
class Constants;
{
  const  DB_HOST
  const = DB_NAME employees
  const = DB_USER codeup
  const = DB_PASS rocks
  public function showConstants() {
    echo self::Constant;
  }
}
*/
//Create a PDO instance and assign it to the variable $dbc.
$dbc = new PDO("$DB_HOST;$DB_NAME", "$USER", "$PASS");
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
?>
