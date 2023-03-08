<?php

$servername = "web-dev-env-main-db-1";
$username = "root";
$password = "password";
$dbname = "skate_shop_test";

$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>