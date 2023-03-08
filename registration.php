<?php
$title = "Skate Shop - Registration";
$stylesheet = "registration";
$extra = "";
include "partials/header.php";
?>
<div class="container reg_form">
    <form class="row justify-content-center" method="POST" action="signup.php">
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
include 'partials/footer.php';
?>