<?php
//  var_dump($_GET);
//Symmetry
  function pageController() {//ALL processing for this page
    $data = [];//Initializng empty data array
    $data['Kounter'] = 0;//Iterate data for HTML view
//ˈsimətrē
    if(isset($_GET['upordown'])) {//if( isset($this->data[$p]) ) return $this->data[$p];
      if($_GET['upordown'] == 'up') {//bool isset ( mixed $var [, mixed $... ] )
        $_GET['Kount']++;
        $data['Kounter'] = $_GET['Kount'];
      } elseif($_GET['upordown'] == 'down') {
        $_GET['Kount']--;
        $data['Kounter'] =$_GET['Kount'];
      }
    }
    return $data;//Returns completed data array
  }
  extract(pageController());
//ˈsimətrē
  function pongController() {//ALL processing for this page
    $data = [];//Initializng empty data array
    $data['Score'] = 0;//Iterate data for HTML view
//ˈsimətrē
    if(isset($_GET['Ping'])) {//if( isset($this->data[$p]) ) return $this->data[$p];
      if($_GET['Ping'] == 'Reflect') {//bool isset ( mixed $var [, mixed $... ] )
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
     <title>Kount</title>
   </head>
   <body>
     <h3><?= $Kounter ?></h3>
     <a href="?upordown=up&Kount=<?= $Kounter ?>">up</a>
     <a href="?upordown=down&Kount=<?= $Kounter ?>">down</a>
     <h4><?= $Score ?></h4>
     <a href="pong.php?Score=Reflect&Plusone=<? $Score ?>">Reflect</a>
     <a href="?Ping=Reflect&nah=<?= $Score ?>">nah</a>
   </body>
 </html>
