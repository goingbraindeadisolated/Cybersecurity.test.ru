<?php
include("includes/dbConnection.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
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
$query = "INSERT INTO answers (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16) VALUES ($q[0], $q[1], $q[2],  $q[3], $q[4], $q[5], $q[6], $q[7], $q[8], $q[9], $q[10], $q[11], $q[12], $q[13], $q[14], $q[15])";
$queryResult = mysqli_query($connection, $query) or die(mysqli_error($connection));

header ('Location: pages/last.php');
exit();
