<?php

$title = "Skate Shop - Login";
$stylesheet = "login";
$extra = "";
include "partials/header.php";

include "connect.php";





if(isset($_POST["submit"])) {                  
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

   
    $stmt = mysqli_prepare($conn, "SELECT * FROM customer WHERE username=?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){

        if (password_verify($pwd, $row['password'])) {
            
            $_SESSION["userid"] = $row["customer_id"];
            $_SESSION["useruid"] = $row["username"];
            
            exit(); 
        }else{
            echo "fuck";
            exit();
        }
        
    }else{
        echo "fuck";

        exit();
    }

    mysqli_stmt_close($stmt);



}



?>


<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="login.php">
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
            <button type="submit" name="submit" class="btn btn-success" href="shop.php">Log in</button>
            <a class="reg" href="registration.php">Registration</a>
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