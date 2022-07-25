<?php
session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["userType"]);
session_destroy ();
header("Location:login.php");
?>