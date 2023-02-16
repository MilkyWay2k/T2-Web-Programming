<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/Skatefavicon-16x16.png" type="image/x-icon">
  <title>Skate Shop - Home Page</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid my-class-with-padding">
        <div class="cotainer-fluid img-1">
          <a class="navbar-brand" href="#"></a>
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
              <a class="nav-link active" aria-current="page" href="#about">About&nbsp;Us</a>
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


  <div class="row">
    <!--A carousel with 3 images, captions-->
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="false"
      data-bs-interval="6500" data-bs-pause="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Landing2.jpg" class="d-block w-100" alt="First landing image">
          <div class="carousel-caption">
            <a href="shop.php" class="caption-link">
              <h3>New collection</h3>
              <h4>Available now!</h4>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/Landing1.jpg" class="d-block w-100" alt="Second landing image">
          <div class="carousel-caption">
            <a href="shop.php" class="caption-link">
              <h3>New collection</h3>
              <h4>Available now!</h4>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/Landing3.jpg" class="d-block w-100" alt="Third landing image">
          <div class="carousel-caption">
            <a href="shop.php" class="caption-link">
              <h3>New collection</h3>
              <h4>Available now!</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Shop and Blog buttons-->
  <div class="row justify-content-around">
    <div class="col-md-6 d-flex justify-content-center">
      <a href="shop.php">
        <div class="card landing-card">
          <img src="images/Product2.png" class="card-img landing-card-img" alt="Shop button image">
          <div class="card-img-overlay landing-card-img-overlay">
            <h2>Shop</h2>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
      <a href="blog.php">
        <div class="card landing-card">
          <img src="images/Blog1.png" class="card-img landing-card-img" alt="Blog button image">
          <div class="card-img-overlay landing-card-img-overlay">
            <h2>Blog</h2>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!--About us section-->
  <div class="row justify-content-center text-center">
    <div class="col-md-6 col-8">
      <a name="about" id="about">
        <h1>About us</h1>
      </a>
      <p>Whether decks, trucks or skate shoes, since 2004, skate-shop has been doing it like no other European skate
        shop. With 18 years of experience and skater-owned from the very start, we are your # 1 destination when it
        comes to skateboarding.
        <br><br>Since our start in the heart of Finland, we now supply all of Europe and thanks to our experienced
        team,
        you’ll never be on your own. We’ve made it our mission to be the premier destination for skateboarders- every
        day, no matter what time, regardless of where you are! Fast delivery within Europe is, of course, ensured.
      </p>
    </div>
  </div>


  <?php

    include 'partials/footer.php';


  ?>