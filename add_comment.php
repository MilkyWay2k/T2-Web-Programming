<?php
include "partials/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $article_id = $_POST["article_id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

  $sql = "INSERT INTO comments (article_id, name, email, comment) VALUES ($article_id, '$name', '$email', '$comment')";

  if (mysqli_query($conn, $sql)) {
    header("Location: article.php?article_id=$article_id");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>
