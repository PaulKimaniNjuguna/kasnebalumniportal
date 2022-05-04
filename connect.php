<?php

	//create connection
$conn = mysqli_connect("localhost", "root", "", "kasnebalumni");


	//check connection
if (!$conn) {
	die("Connection failed" . mysqli_connect_error());
	
}

echo "Connected successfully";


?>