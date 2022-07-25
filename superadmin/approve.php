<?php
require 'connect.php';
$id = $_REQUEST['id'];
$query = "UPDATE users SET approved='yes' WHERE id=$id";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
header("Location: authorizeUser.php");