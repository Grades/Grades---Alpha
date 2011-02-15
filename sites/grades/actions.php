<?php
echo "<b>sites/grades/actions.php</b> wurde erfolgreich geladen. <br>";

$action=$_GET['action'];

switch ($action) {
	case delete:
		$grade_id=$_GET['delid'];
		delete_grade($grade_id);
		break;
	
	default:
		echo "Keine Aktion definiert <br>";
		break;
	}