<?php
$title = "Skate Shop - Skateparks under the magnifying";
$stylesheet = "blog";
$extra = "";
include "partials/header.php";
include "partials/db.php";
?>

<?php
  $article_id = $_GET['article_id'];
  $sql = "SELECT title, content, tags FROM blog WHERE article_id = $article_id";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>

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
        <?php echo '<b>' . $row["title"] . '</b>'?>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <img src="images/Blog3.png" alt="Blog3" width="100%">
      </div>
      <div class="col-md-6 text-center">
        <br>
        <?php echo '<p>' . $row["content"] . '</p>'?>
        <br>
        <img src="images/Blog2.png" alt="Blog2">
      </div>
      <div class="row breadcrumbs" style="margin-top: 20px;">
        <div class="col-12">
          <a href="blog.php">
            <img src="images/Icons/ArrowLeft.png" alt="ArrowLeft">
            Return to blog
          </a>
        </div>
      </div>
      <br><br><br>
      <form method="post" action="add_comment.php">
        <h3>Add a Comment</h3>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="comment">Comment:</label>
          <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <input type="hidden" name="article_id" value="<?php echo $article_id; ?>">
        <br>
        <button type="submit" class="btn btn-danger btn-circle white">Add comment</button>
      </form>
      <h3>Comments:</h3>
      <?php
      $sql = "SELECT name, comment, created_at FROM comments WHERE article_id = $article_id ORDER BY created_at DESC";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='comment'>";
          echo "<h4>" . $row["name"] . "</h4>";
          echo "<h5>" . $row["comment"] . "</h5>";
          echo "<small class='form-text text-muted'>Added: " . $row["created_at"] . "</small>";
          echo "</div>";
          echo '<hr>';
        }
      } else {
        echo "<p>No comments yet.</p>";
      }

      mysqli_close($conn);
      ?>
    </div>
  </div>

  <?php
      }
    } else {
      echo "0 results";
    }
    include 'partials/footer.php';
  ?>