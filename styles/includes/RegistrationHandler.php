<?php
error_reporting(E_ALL);
ini_set('display_errors', 0); 
setcookie("name", $_POST['name']);
setcookie("surname", $_POST['surname']);
setcookie("email", $_POST['email']);
header ("Location: ../pages/main.php");
?>
