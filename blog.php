<?php
$title = "Skate Shop - Blog";
$stylesheet = "blog";
$extra = "";
include "partials/header.php";
include "partials/db.php";

$sql = "SELECT title, content FROM blog";
$result = mysqli_query($conn, $sql);
?>

  <div class="container">
    <div class="row breadcrumbs">
      <div class="col-12 p-4">
        <a href="index.php">
          Main page
        </a>
        <img src="images/Icons/ArrowRight.png" alt="Blog3">
        <b>Blog</b>
      </div>
    </div>
    <a href="blog-add.php" class="btn btn-danger btn-circle white">
        <h6>Add new blog</h6>
    </a>
    
      <div class="row justify-content-center article">
      <?php
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-6 image">
          <a href="article.php">
            <img src="images/Blog1.png" alt="Blog1">
          </a>
        </div>
        <div class="col-md-6 text-center">
          <div id="longtitle">
            <a href="article.php" role="button">
              <?php echo '<h5>'. $row["title"] . '</h5>';?>
            </a>
          </div>
          <br>
          <hr>
          <div id="longcontent">
          <?php echo '<h5>'. $row["title"] . '</h5>';?>
          </div>
          <a href="article.php" class="btn btn-danger btn-circle white">
            <h6>Read more</h6>
          </a>
        </div>
        <?php
              }
            } else {
                echo "0 results";
            }
        ?>
      </div>
  </div>

<script>
var element = document.getElementById("longcontent");
if (element.innerHTML.length > 500) {
  var truncatedText = element.innerHTML.substring(0, 500) + "...";
  element.innerHTML = truncatedText;
}
</script>
<script>
var element = document.getElementById("longtitle");
if (element.innerHTML.length > 160) {
  var truncatedText = element.innerHTML.substring(0, 160) + "...";
  element.innerHTML = truncatedText;
}
</script>

  <?php
    include 'partials/footer.php';
  ?>