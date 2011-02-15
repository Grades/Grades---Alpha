<?php
echo "<b>grades/views/insert/insert.php</b> erfolgreich geladen. <br>";
echo "<a href=\"index.php?site=grades&view=show\">Noten anzeigen</a><br>";
?>
<form name="insert" action="#" method="post">
  <h2>Neue Note eintragen</h2>
  <h4>Note:</h4><br>
    <input type="text" name="grade_value">
  <input type="submit" name="grade_submit" value="Note eintragen">
</form>
<?php
if($_POST['grade_submit']){
  insert_grade($_POST['grade_value']);
  }
?>