<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$databasename = "smk1";
	$connection = mysql_connect($host, $username, $password) or die("Kesalahan Koneksi ... !!");
	mysql_select_db($databasename, $connection) or die("Databasenya Error");
?>