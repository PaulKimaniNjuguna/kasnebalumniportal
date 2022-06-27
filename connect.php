<?php

	$host = "localhost";
	$db = "kasnebalumni";
	$username = "root";
	$passw = "";

	//create connection
$mysqli = new mysqli(hostname: $host, username: $username, password: $passw, database: $db);


	//check connection
if ($mysqli->connect_errno) {
	die("Connection error:" . $mysqli->connect_error);
	
} 