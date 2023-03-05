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

?>


<a href="upload_products.php">uploat product</a>
<h1>Create Category</h1>
<form action="upload_category.php" method="post" enctype="multipart/form-data">
    <label for="category_name">Category Name:</label>
    <input type="text" name="category_name" id="category_name">
    <br>
    <label>Category Image:</label>
    <input type="file" name="category_image"><br><br>
    <input type="hidden" name="submitted" value="true">
    <input type="submit" name="submit" value="Add Category">
</form>

<?php
if (isset($_POST['submit'])) {

        $category_name = $_POST['category_name'];

        // Check if a file was uploaded
        if (!empty($_FILES['category_image']['tmp_name']) && is_uploaded_file($_FILES['category_image']['tmp_name'])) {

            // Read the file contents and escape special characters
            $category_image = addslashes(file_get_contents($_FILES['category_image']['tmp_name']));

            // Prepare the SQL statement to insert the new category
            $sql = "INSERT INTO product_category (category_name, category_image) VALUES ('$category_name', '$category_image')";

            // Execute the SQL statement and check for errors
            if ($conn->query($sql) === TRUE) {
                echo "New category added successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        } else {
            // No file was uploaded
            echo "Error: No category image was uploaded.";
        }

}
?>

<?php
    $sql = "SELECT * FROM product_category";
    $result = $conn->query($sql);
    
    // Check if there are any categories
    if ($result->num_rows > 0) {
        // Output data of each category
        while($row = $result->fetch_assoc()) {
            echo "Category ID: " . $row["category_id"] . "<br>";
            echo "Category Name: " . $row["category_name"] . "<br>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['category_image'] ).'"/><br>';
            echo "<hr>";
        }
    } else {
        echo "No categories found.";
    }
    
    // Close the database connection
?>

<?php
    include 'partials/footer.php';
?>