<?php
require 'connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM jobs WHERE id=$id";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
header("Location: displayjobs.php");