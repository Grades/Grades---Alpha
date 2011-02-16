<?php
//echo "<b>index.php</b> erfolgreich geladen.<br>";

//Seitentitel, falls kein Inhalt
$site_title="ohne Titel";

require_once ("config.php");
require_once ("plugins/plugins.php");
getplugin(sql);
require_once ("sites/sites.php");

// Oberfläche laden
//require_once ("skin/skin.php");
?>
<title><?php echo site_title_suffix . "$site_title";?></title>