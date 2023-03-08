<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "skate_shop";

//creating a connection
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

?>