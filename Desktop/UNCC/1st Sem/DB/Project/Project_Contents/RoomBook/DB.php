<?php
ob_start();
$connection=  mysql_connect("127.0.0.1:3306","root","","root") or die(mysql_error());
$database=  mysql_select_db("meeting") or die(mysql_error());
?>