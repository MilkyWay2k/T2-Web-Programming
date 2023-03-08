<?php

if(isset($_POST["submit"])) {

    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdconfirm = $_POST["pwdconfirm"];

    require_once 'connect.php';
    require_once 'functions.php';

    if (emptyInputSignup($f_name, $l_name, $username, $email, $pwd, $pwdconfirm) !== false) {
        header("location: /registration.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: /registration.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: /registration.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdconfirm) !== false) {
        header("location: /registration.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: /registration.php?error=usernametaken");
        exit();
    }
    if (strlen($pwd) < 8 || strlen($pwd) > 20) {
        header("location: /registration.php?error=invalidpasswordlength");
        exit();
    }

    createUser($conn, $f_name, $l_name, $username, $email, $pwd);
} 
else {
    header("location: /registration.php");
    exit();
}