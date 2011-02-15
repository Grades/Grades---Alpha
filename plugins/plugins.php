<?php
echo "<b>plugins/plugins.php</b> erfolgreich geladen. <br>";
function getplugin($plg_name) {
	require_once($plg_name."/".$plg_name.".php");
}
?>