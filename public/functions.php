<?php
function login() {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $uName = $_REQUEST['uName'];
    if (empty($uName)) {
        echo "Name is empty";
    } else {
        return $uName;
    }
}
}

function inputHas($key) {
  if(isset($_REQUEST[$key])) {
    return true;
  } else {
    return false;
  }
}

function inputGet($key) {
  if(isset($_REQUEST[$key])) {
    return $_REQUEST[$key];
  } else {
    null;
  }
}

function escape($input) {
    return htmlspecialchars(strip_tags($input));
}
//htmlentities
//include_once && require_once if this code has
//already been included, once is enough


/*<?php
// $_REQUEST superglobal for PHP.
// inputHas($key): returns true or false based on whether the key is available.
// inputGet($key): returns the value specified by the key, or null if the key is not set.
// escape($input): returns the input as a safely escaped string.
function inputHas($key){
    return isset($_REQUEST[$key]);
}
function inputGet($key){
    return inputHas($key) ? $_REQUEST[$key] : null;
}
function escape($input){
    return htmlspecialchars(strip_tags($input));
}*/
?>
