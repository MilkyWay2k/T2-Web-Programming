<?php
session_start();

session_id();

$title = "Skate Shop - Cart";
$stylesheet = "cart";
$extra = "";
include "partials/header.php";


$cart_id = session_id();

include "partials/db.php";


//$sql = "SELECT cart_item.product_id, product.product_name, product.price FROM cart_item INNER JOIN product ON cart_item.product_id = product.product_id";
/*$sql = "SELECT  SUM(cart_item.quantity), products.product_name, products.price
        FROM cart_item
        JOIN products ON cart_item.product_id = products.product_id
        WHERE cart_item.session_id = '$cart_id'
        GROUP BY cart_item.product_id;
        ";
        */

$sql = "SELECT products.product_name, SUM(cart_item.quantity) AS quantity, MIN(products.price)*SUM(cart_item.quantity) AS total_price
FROM cart_item INNER JOIN products ON cart_item.product_id = products.product_id
GROUP BY products.product_name;
        ";
$result = $conn->query($sql);

mysqli_select_db($conn, 'cart_item  ');
$sql_cart = "SELECT * FROM cart_item";
$result_cart = $conn->query($sql_cart);


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
          <?php 
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){ 

          ?>
          <div class="title"><?php echo $row['quantity']; ?>x</div>
          <div class="title"><?php echo $row['product_name']; ?></div>
          <div class="amount"><?php echo $row['total_price']; ?>€</div>
          <br>
          <?php 
          }
          } else{
            echo "<p>your cart is empty.</p>";
          }
          ?>

          <div class="title">Shipping</div>
          <div class="amount">5€</div>
          <div class="total">
            <hr>
            <div class="title"><b>Total</b></div>
            <div class="amount">
              <?php
            $sql = "SELECT SUM(total_price)+5 AS total
            FROM (
              SELECT (MIN(products.price)*SUM(cart_item.quantity)) AS total_price
              FROM cart_item INNER JOIN products ON cart_item.product_id = products.product_id
                GROUP BY products.product_name
            ) AS yes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()){ 
                echo $row['total'];
            }
            } else{
              echo "<p>your cart is empty.</p>";
            }
            ?>€</div>
            <br>
            <br>
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
        <a href="shop.php">
          <img src="images/Icons/ArrowLeft.png" alt="Left arrow">
          Return to shop
        </a>
      </div>
      <div class="col-sm-6">
        <a href="shipment.php" class="button-link">
          <div class="continue-button">
            Continue to shipping
          </div>
        </a>
      </div>
    </div>
  </div>

  <?php
    include 'partials/footer.php';
  ?>