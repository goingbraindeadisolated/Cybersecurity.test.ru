<?php
include("dbConnection.php");
error_reporting(E_ALL);
ini_set('display_errors', 0);
$q = [
  $_POST['answerOnQuestion1'],
  $_POST['answerOnQuestion2'],
  $_POST['answerOnQuestion3'],
  $_POST['answerOnQuestion4'],
  $_POST['answerOnQuestion5'],
  $_POST['answerOnQuestion6'],
  $_POST['answerOnQuestion7'],
  $_POST['answerOnQuestion8'],
  $_POST['answerOnQuestion9'],
  $_POST['answerOnQuestion10'],
  $_POST['answerOnQuestion11'],
  $_POST['answerOnQuestion12'],
  $_POST['answerOnQuestion13'],
  $_POST['answerOnQuestion14'],
  $_POST['answerOnQuestion15'],
  $_POST['answerOnQuestion16']
];
$name = $_COOKIE["name"];
$surname = $_COOKIE["surname"];
$email = $_COOKIE["email"];
$query = "INSERT INTO answers (Name, Surname, email, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16) VALUES ( '$name', '$surname', '$email', $q[0], $q[1], $q[2], $q[3], $q[4], $q[5], $q[6], $q[7], $q[8], $q[9], $q[10], $q[11], $q[12], $q[13], $q[14], $q[15])";
$queryResult = mysqli_query($connection, $query) or trigger_error("Query Failed! SQL: $database - Error: ".mysqli_error($connection), E_USER_ERROR);
header ("Location: ../pages/last.php");
exit();
?>
