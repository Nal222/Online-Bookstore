<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$databaseName = "onlinebook";
	
	$con = mysql_connect($host,$user,$pass);
	$dbs = mysql_select_db($databaseName, $con);
?>