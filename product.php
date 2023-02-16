<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css    ">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/shop.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/Skatefavicon-16x16.png" type="image/x-icon">
  <title>Skate Shop - Super coooool skateboard</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
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

  <div class="container whole-shit-together">
    <div class="col-12 p-4 breadcrumbs">
      <a href="index.php">
        Main page
      </a>
      <img src="images/Icons/ArrowRight.png" alt="Blog3">
      <a href="shop.php">
        Shop
      </a>
      <img src="images/Icons/ArrowRight.png" alt="Blog3">
      <b> Super coooool skateboard</b>
      </a>
    </div>

    <div class="container gal">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Product2.png" class="d-block w-100" alt="item">
          </div>
          <div class="carousel-item">
            <img src="images/Product2.png" class="d-block w-100" alt="item">
          </div>
          <div class="carousel-item">
            <img src="images/Product2.png" class="d-block w-100" alt="item">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <hr>

    <div class="container description">
      <div class="row justify-content-between">
        <div class="col-sm-10">
          <p class="text-start fw-bolder fs-4">Super coooool skateboard</p>
        </div>
        <div class="col-sm-2">
          <p class="text-end text-sm-start fw-bold fs-5 py-2" style="min-width: 150px;"><i style="color:#275A53 ;">€100
              <del style="color: #001F23;">€200</del></i></p>
        </div>
      </div>

      <div class="row description">
        <div class="col-sm-4 col-md-3 order-2 order-sm-1">
          <ul>
            <li>Sirpa Skateboards</li>
            <li>Artwork by Laura Timantti</li>
            <li>8.5" x 31.956"</li>
            <li>Tail: 6.663"</li>
          </ul>
        </div>
        <div class="col-sm-4 col-md-3 order-3 order-sm-2">
          <ul>
            <li>Nose: 6.966"</li>
            <li>WB: 14.2"</li>
            <li>High Concave</li>
            <li>Grip included.</li>
          </ul>
        </div>
        <div class="col-sm-2 offset-sm-2 offset-md-4 d-flex justify-content-end order-1 order-sm-3">
          <form action="cart.php">
            <input type="number" id="quantity" name="quantity" min="1" max="10" value="1"
              style="margin: 0 10px 10px 0;">
            <input type="submit" class="btn btn-danger btn-sm submit-btn" value="Buy" style="padding: 15px;">
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php

    include 'partials/footer.php';


  ?>