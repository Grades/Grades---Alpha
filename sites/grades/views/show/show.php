<?php
//echo "<b>/grades/views/show/show.php</b> wurde erfolgreich geladen. <br>";

include ("sites/grades/views/insert/insert.php");

$showgrades_SQL="SELECT * FROM grades ORDER BY grade_id ASC";
$showgrades=mysql_query($showgrades_SQL);
?>

<table>
<tr><th>ID</th><th>WERT</th><th>L&Ouml;SCHEN</th></tr>
<?php 
while($grade=mysql_fetch_array($showgrades)){
	/*echo "Note " . $grade['grade_id'] . " mit dem Wert " . $grade['grade_value'] . " - <a href=\"index.php?site=grades&view=show&action=delete&delid=" . $grade['grade_id'] . "\">l&ouml;schen</a> <br>";*/
	echo "<tr><td>" . $grade['grade_id'] . "</td><td>" . $grade['grade_value'] . "</td><td><a href=\"index.php?site=grades&view=show&action=delete&delid=" . $grade['grade_id'] . "\">l&ouml;schen</a></td></tr>";
}
?>
</table>
<?php
//Seitentitel spezifizieren
$site_title="Meine Noten";
?>