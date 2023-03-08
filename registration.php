<?php
session_start();
$title = "Skate Shop - Registration";
$stylesheet = "registration";
$extra = "";
include "partials/header.php";
include "partials/db.php";


?>
<div class="container reg_form">
    <form class="row justify-content-center" action="registration.php" method="POST" >
        <h3 class="col-12">Registration Form</h3>
        <div class="mb-3 col-12 col-md-4">
            <label for="f_name" class="form-label">Your Name</label>
            <input type="text" class="form-control" name="f_name" placeholder="enter you name">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="l_name" class="form-label">Your Surname</label>
            <input type="text" class="form-control" name="l_name" placeholder="enter you surname">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="uid" placeholder="enter you username">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="email1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                placeholder="enter you email" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="pwd" class="form-control" aria-describedby="passwordHelpBlock">
            <div class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
                special
                characters, or emoji.
            </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="password_confirm" class="form-label">Password Confirmation</label>
            <input type="password" name="pwdconfirm" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" name="submit" class="btn">Join</button>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
          
 <?php

                    if(isset($_POST["submit"])) {
                    
                        $f_name = $_POST["f_name"];
                        $l_name = $_POST["l_name"];
                        $username = $_POST["uid"];
                        $email = $_POST["email"];
                        $pwd = $_POST["pwd"];
                        $pwdconfirm = $_POST["pwdconfirm"];
                    
        
                       /* 
                        require_once 'functions.php';
                    
                        if (emptyInputSignup($f_name, $l_name, $username, $email, $pwd, $pwdconfirm) !== false) {
                            header("location: /registration.php?error=emptyinput");
                            exit();
                        }
                        else if (invalidUid($username) !== false) {
                            header("location: /registration.php?error=invaliduid");
                            exit();
                        }
                        else if (invalidEmail($email) !== false) {
                            header("location: /registration.php?error=invalidemail");
                            exit();
                        }
                        else if (pwdMatch($pwd, $pwdconfirm) !== false) {
                            header("location: /registration.php?error=passwordsdontmatch");
                            exit();
                        }
                        else if (uidExists($conn, $username, $email) !== false) {
                            header("location: /registration.php?error=usernametaken");
                            exit();
                        }
                        else if (strlen($pwd) < 8 || strlen($pwd) > 20) {
                            header("location: /registration.php?error=invalidpasswordlength");
                            exit();
                        }else {
                            echo "error";
                        }
*/


                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all fields</p>";
                            } else if ($_GET["error"] == "invaliduid") {
                                echo "<p>Choose a proper username</p>";
                            } else if ($_GET["error"] == "invalidemail") {
                                echo "<p>Choose a proper email</p>";
                            } else if ($_GET["error"] == "passwordsdontmatch") {
                                echo "<p>Passwords doesn't match</p>";
                            } else if ($_GET["error"] == "stmtfailed") {
                                echo "<p>Something went wrong, try again</p>";
                            } else if ($_GET["error"] == "usernametaken") {
                                echo "<p>Username already taken</p>";
                            } else if ($_GET["error"] == "none") {
                                echo "<p>You have signed up</p>";
                            }
                        }
                    
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        
                         // Insert the values into the database
                        $sql = "INSERT INTO `customer` (username, password, email,f_name,l_name)
                        VALUES ('$username', '$hashedPwd', '$email', '$f_name', '$l_name')";

                        if (mysqli_query($conn, $sql)) {
                        echo "added successfully";
                        } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }

                        

                    }
                        
?>
<?php


                       

                
?>



<?php

            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose a proper username</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email</p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords doesn't match</p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again</p>";
                } else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already taken</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up</p>";
                }
            }
?>
            
        </div>
    </form>
</div>

<?php
    include "partials/footer.php";
?>