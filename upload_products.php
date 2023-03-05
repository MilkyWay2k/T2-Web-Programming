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


?>


<h1>Upload Product</h1>
    <form action="upload_products.php" method="post" enctype="multipart/form-data">
        <label>Product Name:</label>
        <input type="text" name="product_name"><br><br>
        <label>Price:</label>
        <input type="text" name="price"><br><br>
        <label>Description:</label>
        <textarea name="description"></textarea><br><br>
        <label>Image:</label>
        <input type="file" name="image"><br><br>
        <label>Brand Name:</label>
        <input type="text" name="brandname"><br><br>
        <label>Featured:</label>
        <input type="number" name="featured" value="1"><br><br>
        <input type="submit" value="Upload">
    </form>



<?php

// Get the form data
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$brandname = $_POST['brandname'];
$featured = $_POST['featured'];

// Insert the data into the products table
$sql = "INSERT INTO products (product_name, price, description, image, brandname, featured) VALUES ('$product_name', $price, '$description', '$image', '$brandname', $featured)";
if ($conn->query($sql) === TRUE) {
    echo "Product uploaded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>


?>

<?php
    include 'partials/footer.php';
?>