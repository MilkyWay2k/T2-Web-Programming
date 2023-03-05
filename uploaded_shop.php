<?php
$title = "Skate Shop - Shop Page";
$stylesheet = "shop";
$extra = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css    \">";
include "partials/header.php";

$servername = "webprog23-db-1";
$username = "root";
$password = "password";
$dbname = "skate_shop";

$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, 'products');
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

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
      
      <?php
        while($row = $result->fetch_assoc()):
      ?>
      <div class="col d-flex justify-content-xl-start justify-content-center">
        <div class="card products">
          <a href="product.php">
              <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>"/>
              <div class="card-body">
                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                    <p class="price">Price</p><br>
                    <p class="fw-bold" style="color:#275A53;"><?php echo $row['price']; ?>€ <del style="color: black;">200€</del></p>
                    <a href="product.php" class="btn btn-danger btn-circle"><i class="fa-solid fa-shopping-bag fa-md"></i></a>
              </div>
          </a>  
        </div>
      </div>
      
      <?php endwhile; ?>
    </div>
  </div>

 

  <?php
    include 'partials/footer.php';
  ?>