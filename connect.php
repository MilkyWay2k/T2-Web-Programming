<?php

$serverName = "webprog23-db-1";
$dbUsername = "root";
$dbPassword = "password";
$dbName = "customer";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>