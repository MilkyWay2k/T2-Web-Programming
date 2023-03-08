<?php
$title = "Skate Shop - Shop Page";
$stylesheet = "shop";
$extra = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css    \">";
include "partials/header.php";

include "partials/db.php";


?>
<script src="js/val1.js"></script>
<div class="container">
    

 
<a href="upload_products.php" class="btn border mb-4 mt-4">@upload product@</a><br>
<a href="profile.php" class="btn border mb-4"> <= back to the dashboard bro*</a>

<h1>Create Category</h1>
<form action="upload_category.php" method="post" enctype="multipart/form-data" name="cat">
    <label for="category_name">Category Name:</label>
    <input type="text" name="category_name" id="category_name">
    <br>
    <label>Category Image:</label>
    <input type="file" name="category_image"><br><br>
    <input type="hidden" name="submitted" value="true">
    <input type="submit" name="submit" value="Add Category" onclick="return valCat()">
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
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['category_image'] ).'"/>';

            //update category ID and name
            echo "
            <form action='upload_category.php' method='POST' name='update'>
                <input type='hidden' name='category_id' value='". $row['category_id'] ."'>

                <label for='new_category_id'>New Category ID:</label>
                <input type='text' id='new_category_id' name='new_category_id' value='". $row['category_id'] ."'><br>

                <label for='new_category_name'>New Category Name:</label>
                <input type='text' name='new_category_name' value='". $row['category_name'] ."'><br>

                <input type='submit' name='update' value='Update' onclick='return valUp()'>
            </form>";
            
            //delete category
            echo "
            <form action='upload_category.php' method='POST'>
            <input type='hidden' name='category_id' value='". $row['category_id'] ."'>
            <input type='submit' name='delete' value='Delete'>
            </form>";
            echo "<hr>";
            
        }
    }else {
        echo "No categories found.";
    }

    if (isset($_POST['update'])) {
        $category_id = $_POST['category_id'];
        $new_category_name = $_POST['new_category_name'];
        $new_category_id = $_POST['new_category_id'];

        $query_update = "UPDATE product_category SET category_id='$new_category_id', category_name='$new_category_name' WHERE category_id = $category_id";
        mysqli_query($conn, $query_update);
        echo "<meta http-equiv='refresh' content='0'>";
        exit;
    }


    if (isset($_POST['delete'])) {
        $category_id = $_POST['category_id'];
        $query_delete = "DELETE FROM product_category WHERE category_id = $category_id";
        mysqli_query($conn, $query_delete);
        header("Location: upload_category.php");
        echo "<meta http-equiv='refresh' content='0'>";
        exit;
    }

    
?>
</div>
<?php
    include 'partials/footer.php';
?>