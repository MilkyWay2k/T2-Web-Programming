<?php

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/<?php echo $stylesheet; ?>.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/Skatefavicon-16x16.png" type="image/x-icon">
  <title>
    <?php echo $title; ?>
  </title>
  <?php echo $extra; ?>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid my-class-with-padding">
        <div class="cotainer-fluid img-1">
          <a class="navbar-brand" href="index.php"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 links">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#contacts">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php#about">About&nbsp;Us</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 cart">
            <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>My Profile</a></li>";
              echo "<li><a href='logout.php'>Log out</a></li>";
            } else {
              echo " <li class='nav-item'><a class='nav-link active' href='login.php'><img src='images/Icons/skate.png' alt='login' width='30'
                    height='30'></a></li>";
            }
            ?>
            <li class="nav-item">
              <a class="nav-link active" href="#"><img src="images/Icons/search.png" alt="search" width="30"
                  height="30"></a>
                  </li>
            <li class="nav-item">
              <a class="nav-link active" href="cart.php">
              <?php
            include "partials/db.php";
            $query = "SELECT * FROM cart_item";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
              echo "<img src=\"images/Icons/ShoppingcartNotification.png\" alt=\"cart\" width=\"30\" height=\"30\">";
            }
            else{
              echo "<img src=\"images/Icons/Shoppingcart.png\" alt=\"cart\" width=\"30\" height=\"30\">";
            }
            ?>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>