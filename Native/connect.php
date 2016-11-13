<?php
$username = "root";
$password = "";
$hostname = "localhost";	
$dbh = mysql_connect($hostname, $username, $password) 	or die("Unable to connect to MySQL");

//echo "Connected to MySQL<br>";
$selected = mysql_select_db("kidslearningkit",$dbh) or die("Could not select the database kidslearningkit");
?>
