<?php
echo "<b>grades/grades.php</b> erfolgreich geladen. <br>";

/* Includes, Requires
 * --------------------------------------- */
require_once("functions.php");
require_once("actions.php");

/* Views
 * --------------------------------------- */
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