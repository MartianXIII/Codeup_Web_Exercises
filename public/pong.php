<?php
function pongController() {//ALL processing for this page
  $data = [];//Initializng empty data array
  $data['Score'] = 0;//Iterate data for HTML view
//ˈsimətrē
  if(isset($_GET['Ping'])) {//if( isset($this->data[$p]) ) return $this->data[$p];
    if($_GET['Ping'] == 'pong') {//bool isset ( mixed $var [, mixed $... ] )
      $_GET['Plusone']++;
      $data['Score'] = $_GET['Plusone'];
    } elseif($_GET['Ping'] == 'nah') {
      //$_GET['Plusone']--;
      $data['Score'] ="G G BRAH";
    }
  }
  return $data;//Returns completed data array
}
extract(pongController());
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PONG</title>
  </head>
  <body>
    <h4><?= $Score ?></h4>
    <a href="Kounter.php?Score=pong&Plusone=<? $Score ?>">pong</a>
    <a href="?Ping=pong&nah=<?= $Score ?>">nah</a>
  </body>
</html>
