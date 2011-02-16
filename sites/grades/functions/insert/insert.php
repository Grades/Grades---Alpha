<?php
  //echo "<b>/grades/functions/insert/insert.php</b> erfolgreich geladen <br>";

  $grade_SQL_insert="INSERT INTO grades 
    (grade_value) VALUES
    ('$gradevalue')";
  $insert=mysql_query($grade_SQL_insert);
  if($insert){
    echo "Die Note $gradevalue wurde erfolgreich eingetragen! <br>";}
    else{
      echo "Die Note $gradevalue konnte nicht eingetragen werden! <br>";}
?>