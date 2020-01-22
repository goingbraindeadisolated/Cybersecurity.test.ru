<?php
setcookie("name", $_POST['name']);
setcookie("surname", $_POST['surname']);
setcookie("email", $_POST['email']);
header ("Location: ../pages/main.php");
?>
