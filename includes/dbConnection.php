<?php

$host = '127.0.0.1:3306';
$login = 'allahuphallahupa';
$password = '';
$database = 'cstest_db';

$connection = mysqli_connect($host, $login, $password, $database) or die("Невозможно подключиться к базе");

?>
