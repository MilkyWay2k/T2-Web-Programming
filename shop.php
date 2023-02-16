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

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <ul class="navbar-nav l">
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="shop.html">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="index.html#about">About&nbsp;Us</a>
            </li>
          </ul>
          <div class="media">
            <a href="#">
              <img src="images/Icons/Instagram.png" alt="ig" width="30" height="30">
            </a>
            <a href="#">
              <img src="images/Icons/Facebook.png" alt="fb" width="30" height="30">
            </a>
            <a href="#">
              <img src="images/Icons/Twitter.png" alt="tw" width="30" height="30">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="PM">
            <h2>Payment methods</h2>
            <img src="images/Icons/PaymentMethods.png" alt="payment">
          </div>
        </div>
        <div class="col">
          <a name="contacts" id="contacts">
            <h2>Contact with us</h2>
          </a><br>
          <div class="textcols">
            <div class="textcols one">
              <p>Skate Shop store<br>Funnytie 33,<br>13100 Hämeenlinna.<br>Webstore 24/7</p>
            </div>
            <div class="textcols two">
              <p><a href="tel:+358405555555">040 555 5555</a><br>
                <a href="mailto:shop@skate-shop.fi">shop@skate-shop.fi</a><br>VAT id: FI32008000
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <h2>Customer Benefits</h2><br>
          <ul>
            <li class="benefits">30-day return</li>
            <li class="benefits">Free shipping on orders over 100€</li>
            <li class="benefits">Fast shipping</li>
            <li class="benefits">SSL Secure Shopping</li>
          </ul>
        </div>
      </div>
    </div>
    <!--Bottom footer-->
    <div class="footer-bottom">
      <div class="row">
        <div class="d-flex justify-content-center">
          <div class="col-md-12 text-center">
            <p>&copy; 2023 Skate Shop</p>
          </div>
        </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>