<?php
echo "<b>grades/grades.php</b> erfolgreich geladen. <br>";

require_once("functions/functions.php");

$view=$_GET['view'];
switch ($view){
  case insert:
    require_once("views/insert/insert.php");
    break;
  case show:
    require_once("views/show/show.php");
    break;
  default:
    echo ("Keine Ansicht definiert");
    break;
  }
?>