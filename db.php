<?php
$servername = "db";
$username = "root";
$password = "password";
$dbname = "skate-shop";

//create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check the connection
if ($conn->connect_error){
    die("Connection faild:" . $conn->connect_error);
}

?>