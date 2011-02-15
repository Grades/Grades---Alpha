<?php
echo "<b>/grades/functions/functions.php</b> erfolgreich geladen! <br>";
 /* Insert
  * -----------------------------------------------  */
function insert_grade ($gradevalue) {
  include ("functions/insert/insert.php");
  }

/* Delete
 * ------------------------------------------------- */
function delete_grade ($grade_id) {
	include ("functions/delete/delete.php");
	}
?>