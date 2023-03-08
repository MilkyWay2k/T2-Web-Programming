<?php
// start or resume the session
session_start();

// get the current session ID or generate a new one
$session_id = session_id();


$title = "Skate Shop - Super coooool skateboard";
$stylesheet = "shop";
$extra = "";
include "partials/header.php";

include "partials/db.php";


//retrieve the product ID from the URL parameter
$product_wow = $_GET['link'];
$product_n = $_GET['name'];
$product_p = $_GET['price'];
$product_d = $_GET['discount'];

//printing correct image to the product
$sql_image = "SELECT image FROM products WHERE product_id = $product_wow";
$result_image = mysqli_query($conn, $sql_image);
$product_img = mysqli_fetch_assoc($result_image);
$image_data = $product_img['image'];

//printing correct desciption to the product
$sql_desc = "SELECT description FROM products WHERE product_id = $product_wow";
$result_desc = mysqli_query($conn, $sql_desc);
$product_desc = mysqli_fetch_assoc($result_desc);
$desc_data = $product_desc['description'];

$bullets = explode(".", $desc_data);



$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_assoc($result);


// Check if the query was successful and retrieve the product data
if ($result && mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
}






// Check if the form was submitted
if (isset($_POST['buy'])) {
    
  // Get the form data
  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $quantity = $_POST['quantity'];


  
  // Insert the values into the database
  $sql = "INSERT INTO `cart_item` (session_id, product_id, quantity)
          VALUES ('$session_id', '$product_id', '$quantity')";
  
  if (mysqli_query($conn, $sql)) {
      echo "Order placed successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  // Close the database connection
  mysqli_close($conn);


}

?>

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
            <img src="data:image/jpeg;base64,<?=base64_encode($image_data)?>" class="d-block w-100" alt="$product_n">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,<?=base64_encode($image_data)?>" class="d-block w-100" alt="$product_n">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,<?=base64_encode($image_data)?>" class="d-block w-100" alt="$product_n">
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
          <p class="text-start fw-bolder fs-4"><?php echo $product_n;?></p>
        </div>
        <div class="col-sm-2">
          <p class="text-end text-sm-start fw-bold fs-5 py-2" style="min-width: 150px;"><i style="color:#275A53 ;">€<?php echo $product_p;?>
              <del style="color: #001F23;">€<?php echo $product_d;?></del></i></p>
        </div>
      </div>

      <div class="row description">
        <div class="col-sm-4 col-md-3 order-2 order-sm-1">
          <ul>
            <?php
              foreach ($bullets as $sentence) {
                if (!empty($sentence)) {
                  echo "<li>$sentence.</li>";
                }
              }           
            ?>
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
          <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST">
            <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" style="margin: 0 10px 10px 0;">
            <input type="hidden" name="product_id" value="<?=$product_wow?>">
            <input type="hidden" name="product_name" value="<?=$product['product_name']?>">
            <input type="hidden" name="product_price" value="<?=$product['price']?>">
            <input type="submit" class="btn btn-danger btn-sm submit-btn" name="buy" value="Buy" style="padding: 15px;">
          </form>


<?php



?>


        </div>
      </div>
    </div>
  </div>







  
<?php
/*
if(isset($_POST['buy'])){
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$price = $_POST['product_price'];
$quantity = $_POST['quantity'];

echo "all good";

if (!isset($product_id) || !isset($product_name) || !isset($price) || !isset($quantity)) {
  echo "Error: Missing required input values.";
  exit;
}

$_SESSION['cart'][$product_id] = array(
  'product_name' => $product_name,
  'product_price' => $price,
  'quantity' => $quantity
);

    // Prepare the SQL statement to insert the new category
      $sql = "INSERT INTO cart_item (product_id, quantity) VALUES ('$product_id', '$quantity')";

      // Execute the SQL statement and check for errors
      if ($conn->query($sql) === TRUE) {
          echo "Product added to the cart successfully!";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

}*/

?>


  <?php
    include 'partials/footer.php';
  ?>
