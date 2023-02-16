<?php
$title = "Skate Shop - Payment";
$stylesheet = "cart";
$extra = "";
include "partials/header.php";
?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <a href="index.php"> Main page </a>
        <img src="images/Icons/ArrowRight.png" alt="right arrow">
        <a href="shop.php"> Shop </a>
        <img src="images/Icons/ArrowRight.png" alt="right arrow">
        <a href="cart.php"> Cart </a>
        <img src="images/Icons/ArrowRight.png" alt="right arrow"><b>Payment</b>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 justify-content-center" style="margin-bottom: 10px;">
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
    <h4>Payment</h4>
    <div class="container-fluid d-flex h-100 justify-content-center align-items-center">
      <div class="col-md-6 justify-content-center">
        <p class="center">Credit card</p>
        <hr>
      </div>
    </div>
    <div class="container-fluid d-flex h-100 justify-content-center align-items-center">
      <div class="col-md-6 justify-content-center">
        <p class="center">OR
          <img src="images/Icons/PaymentMethods.png" alt="payment" class="center">
        </p>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-sm-2" style="margin-bottom: 25px; width: 200px;">
        <a href="shipment.php">
          <img src="images/Icons/ArrowLeft.png" alt="left arrow">
          Return to shipping
        </a>
      </div>
      <div class="col-sm-2">
        <a href="#" class="button-link">
          <div class="continue-button">
            Pay now
          </div>
        </a>
      </div>
    </div>
  </div>


  <?php
    include 'partials/footer.php';
  ?>