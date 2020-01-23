<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
$host = '127.0.0.1:3306';
$login = 'allahuphallahupa';
$password = '';
$database = 'cstest_db';

$connection = mysqli_connect($host, $login, $password, $database) or trigger_error(mysqli_connect_error());

?>
