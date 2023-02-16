<?php
$title = "Skate Shop - Shipment";
$stylesheet = "cart";
$extra = "";
include "partials/header.php";
?>

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