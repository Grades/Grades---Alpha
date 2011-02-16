<?php
//echo "<b>/grades/functions/functions.php</b> erfolgreich geladen! <br>";
 /* Insert
  * -----------------------------------------------  */
function insert_grade ($gradevalue) {
  require ("functions/insert/insert.php");
  }

/* Delete
 * ------------------------------------------------- */
function delete_grade ($grade_id) {
	require ("functions/delete/delete.php");
	}
?>