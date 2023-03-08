<?php
$title = "Skate Shop - Login";
$stylesheet = "login";
$extra = "";
include "partials/header.php";
?>
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="auth.php">
        <h3>Welcome back!</h3>
       <div class="mb-3 col-12 col-md-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name = "uid" placeholder="enter you username">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" name = "pwd" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-success" href="shop.php">Log in</button>
            <a class="reg" href="registration.php">Registration</a>
            <a href="#">Forgot password?</a>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login</p>";
                }
            }
            ?>
        </div>
    </form>
</div>

<?php
include 'partials/footer.php';
?>