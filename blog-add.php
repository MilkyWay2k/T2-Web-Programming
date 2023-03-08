<?php
$title = "Skate Shop - Blog";
$stylesheet = "blog";
$extra = "";
include "partials/header.php";
include "partials/db.php";
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
        <a href="blog.php">
          Blog
        </a>
        <img src="images/Icons/ArrowRight.png" alt="Blog3">
        <b>Add blog</b>
      </div>
    </div>
    <div class="row justify-content-center article">
    <div class="col-md-12">
      <form method="post" onsubmit="return crud()">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" id="title" class="form-control" maxlength="80" required>
        </div>
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea name="content" id="content" class="form-control" rows="5" maxlength="500" required></textarea>
        </div>
        <div class="form-group">
          <label for="tags">Tags:</label>
          <br>
          <input type="text" id="tags" name="tags" maxlength="50" onkeyup="addTags()" placeholder="Enter tags">
          <small class="form-text text-muted">Tags should be separated by comma!</small>
          <div id="tagList"></div>
        </div>
        <div class="form-group">
          <label for="category">Category:</label>
          <select name="category" id="category" class="form-control" required>
            <option value="">-- Select category --</option>
            <option value="News">News</option>
            <option value="Events">Events</option>
          </select>
        </div>
        <input type="submit" name="submit" value="Create post">
      </form>
    </div>
  </div>
  <?php 
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["submit"])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = $_POST['tags'];
    $category = $_POST['category'];
  
      $sql = "insert into blog (title,content,tags,category)
      values('$title', '$content', '$tags', '$category')";
      if ($conn->query($sql)=== TRUE){
          echo "<script>alert('Your blog is added successfully');</script>";
          echo "<script>document.location.href='http://localhost:81/blog.php';</script>";
      }
      else{
          echo "Error:" . $conn->error;
      }
    }
?>
  </div>

  <?php
    include 'partials/footer.php';
  ?>