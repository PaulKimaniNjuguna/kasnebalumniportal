<?php
require 'connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM evaluation WHERE id=$id";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
header("Location: displayevaluation.php");