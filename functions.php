<?php

function emptyInputSignup($f_name, $l_name, $username, $email, $pwd, $pwdconfirm) {
    '$result';
    if (empty($f_name) || empty($l_name) || empty($username) || empty($email) || empty($pwd) || empty($pwdconfirm)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidUid($username) {
    '$result';
    if (!preg_match('/^[a-z]\w{2,23}[^_]$/i', $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    '$result';
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdconfirm) {
    '$result';
    if ($pwd !== $pwdconfirm) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM customer WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: /registration.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $username, $pwd, $email, $f_name, $l_name) {
    $sql = "INSERT INTO customer (username, password, email, f_name, l_name) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: /registration.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $f_name, $l_name, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: /registration.php?error=none");
        exit();
}

function emptyInputLogin($username, $pwd) {
    '$result';
    if (empty ($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: /login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: /login.php?error=wronglogin");
        exit(); 
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["customer_id"];
        $_SESSION["useruid"] = $uidExists["username"];
        header("location: /index.php");
        exit(); 
    }
}