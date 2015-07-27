<?php

require_once "../Input.php";

function pageController(){
  $data = [];
  if(Input::has('score')) {
    $data['score'] = Input::get('score');
  }else {
    $data['score'] = 0;
    echo "GG";
  }
  return $data;
}
extract(pageController());
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Your score is <?= $score ?> </h1>
     <a href="pong2.php?score=<?= $score +1 ?>">Hit</a>
     <a href="pong2.php">Miss</a>
   </body>
 </html>
