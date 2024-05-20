<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Demo3";
$port = 3306;

$connect = new mysqli($servername, $username, $password, $database, $port);
mysqli_set_charset($connect, 'utf8');
if ($connect->connect_error) {
    die("Ошибка подключения: " . $connect->connect_error);
}
?>