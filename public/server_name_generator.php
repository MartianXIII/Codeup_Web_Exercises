<?php

$rndAdj = ["Rekt", "Shrekt", "RIP", "Deleted", "Owned", "Fract", "six", "seven", "eight", "nine"];
$rndNoun = ["Base", "Face", "Mind", "Huh", "Body", "Soul", "Neck", "Gut", "Butt", "onemore"];
$stuff = ["Eating", "Sleeping", "Bowel Movements", "Blinking", "Breathing", "xis", "neves", "enin", "again", "last"];
function pageController($rndAdj, $rndNoun) {
    $data = [];
    $data['rndAdj2'] = rndServer($rndAdj);
    $data['rndNoun2'] = rndServer($rndNoun);
    return $data;
}

function rndServer($combo) {
  $Rand = mt_rand(0,9);

  return $combo[$Rand];
}

extract(pageController($rndAdj, $rndNoun));
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ultimate Server Name Generation Beta.0021</h1>
    <h2><?= "{$rndAdj2} {$rndNoun2}" ?></h2>

  </body>
</html>
