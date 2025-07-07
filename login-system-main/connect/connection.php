<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "loginsystem";

$connect = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

if ($connect->connect_error) {
    die("Failed to connect to MySQL: " . $connect->connect_error);
}
?>
