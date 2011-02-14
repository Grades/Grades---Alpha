<?php
//Baue Verbindung zu Datenbank auf
$database = mysql_connect(DBhost,DBuser,DBpswd)
or die ("Verbindung fehlgeschlagen");
mysql_select_db(DBname,$database);
?>