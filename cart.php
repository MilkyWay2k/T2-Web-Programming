<?php
$title = "Skate Shop - Cart";
$stylesheet = "cart";
$extra = "";
include "partials/header.php";
?>

  <div class="container">
    <div class="row breadcrumbs">
      <div class="col-12">
        <a href="index.php">Main page</a>
        <img src="images/Icons/ArrowRight.png">
        <a href="shop.php">Shop</a>
        <img src="images/Icons/ArrowRight.png">
        <b>Cart</b>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 justify-content-center" style="margin-bottom: 10px;">
        <img src="images/Product2.png" class="thumbnail">
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
    <h4>Contact information</h4>
    <div class="row justify-content-center">
      <div class="col-md-6 justify-content-center text-center" style="margin-bottom: 20px;">
        <form>
          <input type="text" id="fname" name="fname" placeholder="First name"> <br>
          <input type="text" id="lname" name="lname" placeholder="Last name"><br>
          <input type="text" id="email" name="email" placeholder="Email"><br>
          <div class="box">
            <input type="checkbox" id="signup" name="signup" checked>
          </div>
          <div class="box-text">Email me with news and offers</div><br>
          <div class="box">
            <input type="radio" id="pickup" name="deliveryOption" value="pickup">
          </div>
          <div class="box-text">Pick up</div>
          <div class="box">
            <input type="radio" id="delivery" name="deliveryOption" value="delivery">
          </div>
          <div class="box-text">Delivery</div>
        </form>
      </div>
      <div class="col-md-6 justify-content-center text-center">
        <form>
          <select id="country" name="country">
            <option value="" selected disabled hidden>Country</option>
            <option value="finland">Finland</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="nk">North Korea</option>
            <option value="madagascar">Madagascar</option>
            <option value="vatican">Vatican city</option>
          </select><br>
          <input type="text" id="company" name="company" placeholder="Company (Optional)"><br>
          <input type="text" id="address" name="address" placeholder="Address"><br>
          <input type="text" id="postal code" name="postal code" placeholder="Postal code"
            style="width: 40%; margin-right: 10%;">
          <input type="text" id="city" name="city" placeholder="City" style="width: 40%;"><br>
          <input type="text" id="phone" name="phone" placeholder="Phone"><br>
          <div class="box">
            <input type="checkbox" id="save" name="save">
          </div>
          <div class="box-text">Save this infomation for next time</div>
        </form>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-sm-6" style="margin-bottom: 25px; width: 200px;">
        <a href="shop.html">
          <img src="images/Icons/ArrowLeft.png" alt="Left arrow">
          Return to shop
        </a>
      </div>
      <div class="col-sm-6">
        <a href="shipment.html" class="button-link">
          <div class="continue-button">
            Continue to shipping
          </div>
        </a>
      </div>
    </div>
  </div>

  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col columns">
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
        <div class="col columns">
          <div class="PM">
            <h2>Payment methods</h2>
            <img src="images/Icons/PaymentMethods.png" alt="payment">
          </div>
        </div>
        <div class="col columns">
          <a name="contacts" id="contacts">
            <h2>Contact with us</h2>
          </a><br>
          <div class="textcols">
            <div class="textcols one">
              <p>Skate&nbsp;Shop&nbsp;store<br>Funnytie&nbsp;33,<br>13100 Hämeenlinna.<br>Webstore&nbsp;24/7</p>
            </div>
            <div class="textcols two">
              <p><a href="tel:+358405555555">040&nbsp;555&nbsp;5555</a><br>
                <a href="mailto:shop@skate-shop.fi">shop@skate-shop.fi</a><br>VAT&nbsp;id:&nbsp;FI32008000
              </p>
            </div>
          </div>
        </div>
        <div class="col cloumns">
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
      <div class="container-fluid">
        <div class="row">
          <div class="d-flex justify-content-center">
            <div class="col-md-12 text-center">
              <p>&copy; 2023 Skate Shop</p>
            </div>
          </div>
        </div>
      </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>