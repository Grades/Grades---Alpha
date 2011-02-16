<?php
  //echo "<b>/sites/grades/functions/insert/insert.php</b> erfolgreich geladen <br>";

  $grade_SQL_delete="DELETE FROM grades WHERE grade_id='$grade_id'";
  $delete=mysql_query($grade_SQL_delete);
  if($delete){
    echo "Die Note $gradevalue wurde erfolgreich gel&ouml;scht! <br>";}
    else{
      echo "Die Note $gradevalue konnte nicht gel&ouml;scht werden! <br>";}
?>