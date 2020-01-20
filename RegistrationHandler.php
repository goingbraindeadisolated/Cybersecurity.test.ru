<?php
include("includes/dbConnection.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$query = "INSERT INTO answers (date, Name, Surname, email) VALUES (NOW(), $name, $surname, '$email')";
$queryResult = mysqli_query($connection, $query) or die(mysqli_error($connection));

header ('Location: pages/main.php');
exit();
?>
