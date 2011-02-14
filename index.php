<?php
echo "<b>index.php</b> erfolgreich geladen. auf Git-Repository!<br>";
require_once ("config.php");
require_once ("system/sql/sql.php");
$site=$_GET['site'];
require_once($site."/".$site.".php");
?>