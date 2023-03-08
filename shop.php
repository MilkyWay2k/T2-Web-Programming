<?php
$title = "Skate Shop - Shop Page";
$stylesheet = "shop";
$extra = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css    \">";
include "partials/header.php";
include "databases/db.php";
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
  <?php
  $sql = "SELECT * FROM product_category";
  $result = $conn->query($sql);
  ?>
  <div class="row d-flex justify-content-center justify-content-md-start">

    <?php
    while ($row = $result->fetch_assoc()):
      ?>
      <div class="card col-4 text-md catcard">
        <a href="#">
          <img src="data:image/jpeg;base64,<?php echo base64_encode($row['category_image']); ?>" class="card-img"
            alt="<?php echo $row['category_name']; ?>">
          <div class="card-img-overlay">
            <h5 class="card-title card-title-category">
              <?php echo $row['category_name']; ?>
            </h5>
            <p class="card-text"><small>12 items</small></p>
          </div>
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<hr style="margin: auto;">

<div class="container justify-content-center">
  <form method="post">
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="sorting"
      onchange="this.form.submit()">
      <option selected>Sorting</option>
      <option value="1">Lowest price first</option>
      <option value="2">Highest price first</option>
      <option value="3">Name [A-Z]</option>
      <option value="4">Name [Z-A]</option>
    </select>
  </form>


  <div class="row">
    <?php
    $query = $queryBase = "SELECT product.product_name AS `name`, product.price AS `price`, product_image.image AS `image` FROM product INNER JOIN product_image ON product.image_id=product_image.image_id";
    if (isset($_POST['sorting'])) {
      $sorting = $_POST['sorting'];
      if ($sorting == 1) {
        $query = $queryBase . " ORDER BY price ASC";
      } else if ($sorting == 2) {
        $query = $queryBase . " ORDER BY price DESC";
      } else if ($sorting == 3) {
        $query = $queryBase . " ORDER BY name ASC";
      } else if ($sorting == 4) {
        $query = $queryBase . " ORDER BY name DESC";
      }
      //echo $query;
    }

    $result = $conn->query($query);
    while ($row = mysqli_fetch_assoc($result)):
      ?>
      <div class="col-xl-3 col-md-4 d-flex justify-content-xl-start justify-content-center">
        <div class="card products">
          <a href="product.php">
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $row['name']; ?>
              </h5>
              <p class="price">Price</p><br>
              <p class="fw-bold" style="color:#275A53 ;">
                <?php echo $row['price']; ?>€
              </p>
              <a href="#" class="btn btn-danger btn-circle"><i class="fa-solid fa-shopping-bag fa-md"></i></a>
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