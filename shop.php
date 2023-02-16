<?php
$title = "Skate Shop - Shop Page";
$stylesheet = "shop";
$extra = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css    \">";
include "partials/header.php";
?>

  <div class="container category">
    <div class="col-12 p-4 breadcrumbs">
      <a href="index.php">
        Main page
      </a>
      <img src="images/Icons/ArrowRight.png" alt="Blog3">
      <a href="shop.php">
        <b>Shop</b>
      </a>
    </div>

    <div class="row d-flex justify-content-center justify-content-md-start">
      <div class="card col-4 text-md catcard">
        <a href="#">
          <img src="images/ProductCategory1.png" class="card-img" alt="skate">
          <div class="card-img-overlay">
            <h5 class="card-title card-title-category">skateboard</h5>
            <p class="card-text"><small>12 items</small></p>
          </div>
        </a>
      </div>

      <div class="card col-4 text-md catcard">
        <a href="#">
          <img src="images/ProductCategory3.png" class="card-img" alt="skate">
          <div class="card-img-overlay">
            <h5 class="card-title card-title-category">clothes</h5>
            <p class="card-text"><small>12 items</small></p>
          </div>
        </a>
      </div>

      <div class="card col-4 text-md catcard">
        <a href="#">
          <img src="images/ProductCategory2.png" class="card-img" alt="skate">
          <div class="card-img-overlay">
            <h5 class="card-title card-title-category">stickers</h5>
            <p class="card-text"><small>12 items</small></p>
          </div>
        </a>
      </div>

      <div class="card col-4 text-md catcard">
        <a href="#">
          <img src="images/ProductCategory1.png" class="card-img" alt="skate">
          <div class="card-img-overlay">
            <h5 class="card-title card-title-category">fingerboard</h5>
            <p class="card-text"><small>12 items</small></p>
          </div>
        </a>
      </div>

      <div class="card col-4 text-md catcard">
        <a href="#">
          <img src="images/ProductCategory2.png" class="card-img" alt="skate">
          <div class="card-img-overlay">
            <h5 class="card-title card-title-category">others</h5>
            <p class="card-text"><small>12 items</small></p>
          </div>
        </a>
      </div>
    </div>
  </div>

  <hr style="margin: auto;">

  <div class="container justify-content-center">
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
      <option selected>Sorting</option>
      <option value="1">lowest price</option>
      <option value="2">highest price</option>
      <option value="3">newest</option>
      <option value="4">odlest</option>
    </select>

    <div class="row">
      <div class="col d-flex justify-content-xl-start justify-content-center">
        <div class="card products">
          <a href="product.php">
            <img src="images/Product1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">brand new sakteboard skull collection </h5>
              <p class="price">Price</p><br>
              <p class="fw-bold" style="color:#275A53 ;">100€ <del style="color: black;">200€</del></p>
              <a href="#" class="btn btn-danger btn-circle"><i class="fa-solid fa-shopping-bag fa-md"></i></a>
            </div>
          </a>
        </div>
      </div>

      <div class="col d-flex justify-content-xl-start justify-content-center">
        <div class="card products">
          <a href="product.php">
            <img src="images/Product1.png" class=" card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">brand new sakteboard skull collection </h5>
              <p class="price">Price</p><br>
              <p class="fw-bold" style="color: #275A53;">100€ <del style="color: black;">200€</del></p>
              <a href="#" class="btn btn-danger btn-circle"><i class="fa-solid fa-shopping-bag fa-md"></i></a>
            </div>
          </a>
        </div>
      </div>

      <div class="col d-flex justify-content-xl-start justify-content-center">
        <div class="card products">
          <a href="product.php">
            <img src="images/Product1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">brand new sakteboard skull collection </h5>
              <p class="price">Price</p><br>
              <p class="fw-bold" style="color:#275A53;">100€ <del style="color: black;">200€</del></p>
              <a href="#" class="btn btn-danger btn-circle"><i class="fa-solid fa-shopping-bag fa-md"></i></a>
            </div>
          </a>
        </div>
      </div>

      <div class="col d-flex justify-content-xl-start justify-content-center">
        <div class="card products">
          <a href="product.php">
            <img src="images/Product1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">brand new sakteboard skull collection </h5>
              <p class="price">Price</p><br>
              <p class="fw-bold" style="color:#275A53;">100€ <del style="color: black;">200€</del></p>
              <a href="#" class="btn btn-danger btn-circle"><i class="fa-solid fa-shopping-bag fa-md"></i></a>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php
    include 'partials/footer.php';
  ?>