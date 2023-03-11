<?php
$stylesheet = "blog";
$extra = "";
include "partials/header.php";
include "partials/db.php";

<<<<<<< Updated upstream
$sql = "SELECT article_id, title, content, tags, image FROM blog";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$image = $row['image'];
=======
$sql = "SELECT title, content FROM blog";
$result = mysqli_query($conn, $sql);
>>>>>>> Stashed changes
?>

<script>
function addTags() {
  var tagInput = document.getElementById("tags");
  var tagList = document.getElementById("tagList");
  var tags = tagInput.value.split(",");
  var html = "";
  for (var i = 0; i < tags.length && i < 5; i++) {
    if (tags[i].trim() !== "") {
      html += "#" + tags[i].trim() + " ";
    }
  }
  tagList.innerHTML = html;
}
</script>

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
    <br><br>
      <div class="row justify-content-center article">
      <?php
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-6 image">
        <a href="article.php?article_id=<?php echo $row["article_id"]; ?>">
            <img src="images/Blog1.png" alt="Blog1">
          </a>
        </div>
        <div class="col-md-6 text-center">
          <div id="longtitle">
          <a href="article.php?article_id=<?php echo $row["article_id"]; ?>" role="button">
              <?php echo '<h5>'. $row["title"] . '</h5>';?>
          </a>
          </div>
          <br>
          <hr>
          <div id="longcontent">
            <?php echo '<h5>'. $row["content"] . '</h5>';?> 
          </div>
          <div class="tags">
            <?php 
              echo '<small class="form-text text-muted">Tags: </small>';
              $tags = explode(",", $row["tags"]);
              foreach ($tags as $tag) {
                echo '<small class="form-text text-muted">' . "#" . trim($tag) . '</small>' . ' ';
              }
            ?>
          </div>
          <a href="article.php?article_id=<?php echo $row['article_id']?>" class="btn btn-danger btn-circle white">
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