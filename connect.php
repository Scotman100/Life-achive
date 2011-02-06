<?php
$con = mysql_connect('localhost', 'root', 'flashcat') or die(mysql_error());
$db = mysql_select_db('lifeachive', $con) or die(mysql_error());
?>