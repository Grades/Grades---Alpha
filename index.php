<?php
echo "<b>index.php</b> erfolgreich geladen.<br>";
require_once ("config.php");
require_once ("plugins/plugins.php");
getplugin(sql);
require_once ("sites/sites.php");
?>