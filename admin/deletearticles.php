<?php
require 'connect.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM articles WHERE id=$id";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
header("Location: displayarticles.php");