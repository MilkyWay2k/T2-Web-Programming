<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>Skate Shop - Shipment</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid my-class-with-padding">
        <div class="cotainer-fluid img-1">
          <a class="navbar-brand" href="index.html"></a>
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
            <li class="nav-item">
              <a class="nav-link active" href="#"><img src="images/Icons/search.png" alt="search" width="30"
                  height="30"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="cart.html"><img src="images/Icons/Shoppingcart.png" alt="cart" width="30"
                  height="30"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <p><a href="index.php"> Main page </a>
          <img src="images/Icons/ArrowRight.png" alt="right arrow">
          <a href="shop.php"> Shop </a>
          <img src="images/Icons/ArrowRight.png" alt="right arrow">
          <a href="cart.php"> Cart </a>
          <img src="images/Icons/ArrowRight.png" alt="right arrow"><b>Payment</b>
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 justify-content-center">
        <img src="images/Product2.png" alt="P2" class="thumbnail">
      </div>
      <div class="col-md-6">
        <div class="prices">
          <div class="title">Super cool skateboard</div>
          <div class="amount">100€</div>
          <br>
          <div class="title">Shipping</div>
          <div class="amount">5€</div>
          <div class="total">
            <hr>
            <div class="title"><b>Total</b></div>
            <div class="amount">105€</div>
            <br>
            <p class="subtext">Including 25,2€ in taxes</p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h4>Shipping information</h4>
    <br>
    <div class="container-fluid d-flex h-100 text-center justify-content-center align-items-center">
      <form>
        <input type="text" id="phone" name="phone" placeholder="Phone"><br>
        <input type="text" id="address" name="Address" placeholder="Ship to"><br>
        <select id="methods" name="methods">
          <option value="" selected disabled hidden>Shipping method</option>
          <option value="pickup">Pickup</option>
          <option value="dhl">DHL</option>
          <option value="posti">Posti</option>
        </select>
    </div>
    <div class="row justify-content-between">
      <div class="col-sm-2" style="margin-bottom: 25px; width: 200px;">
        <a href="cart.php">
          <img src="images/Icons/ArrowLeft.png" alt="left arrow">
          Return to cart
        </a>
      </div>
      <div class="col-sm-2">
        <a href="payment.php" class="button-link">
          <div class="continue-button">Continue to payment</div>
        </a>
      </div>
    </div>
  </div>


  <?php

    include 'partials/footer.php';


  ?>