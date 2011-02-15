<?php
echo "<b>/grades/views/show/show.php</b> wurde erfolgreich geladen. <br>";

echo "<a href=\"index.php?site=grades&view=insert\">Neue Note eintragen</a> <br>";

$showgrades_SQL="SELECT * FROM grades ORDER BY grade_id ASC";
$showgrades=mysql_query($showgrades_SQL);

while($grade=mysql_fetch_array($showgrades)){
	echo "Note " . $grade['grade_id'] . " mit dem Wert " . $grade['grade_value'] . " - <a href=\"index.php?site=grades&view=show&action=delete&delid=" . $grade['grade_id'] . "\">l&ouml;schen</a> <br>";  
}
?>