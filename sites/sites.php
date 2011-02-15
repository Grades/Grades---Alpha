<?php
echo "<b>sites/sites.php</b> erfolgreich geladen. <br>";

/* Include Site
 * ------------------------------------------- */
$site=$_GET['site'];
require_once ($site."/".$site.".php");
?>