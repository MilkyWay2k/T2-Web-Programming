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



<div class="container">
<div class="row d-flex justify-content-center justify-content-md-start">    
    <a href="upload_category.php">upload category</a>

    <h1>Upload Product</h1>
        <form action="upload_products.php" method="post" enctype="multipart/form-data">
            <label>Product Name:</label>
            <input type="text" name="product_name"><br><br>

            <label>Price:</label>
            <input type="text" name="price"><br><br>

            <label>Discount:</label>
            <input type="text" name="discount"><br><br>

            <label>Description:</label>
            <textarea name="description"></textarea><br><br>

            <label>Image:</label>
            <input type="file" name="image"><br><br>

            <label>Brand Name:</label>
            <input type="text" name="brandname"><br><br>

            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                <?php
                    // Select all categories from the database
                $sql = "SELECT * FROM product_category";
                $result = $conn->query($sql);

                // Loop through each category and create an option element in the dropdown
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
                }
                ?>
            </select><br>
            <label>Featured:</label>
            <input type="number" name="featured" value="1"><br><br>

            <input type="submit" value="Upload">
        </form>


    <?php

    if(isset($_POST['product_name'])) {
    // Get the form data
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $category = $_POST['category_id'];
    $brandname = $_POST['brandname'];
    $featured = $_POST['featured'];

    // Insert the data into the products table
    $sql = "INSERT INTO products (product_name, price, discount,description, image, category_id, brandname, featured) VALUES ('$product_name', '$price', '$discount','$description', '$image', '$category', '$brandname', ' $featured')";

    if ($conn->query($sql) === TRUE) {
        echo "Product uploaded successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }
    ?>


    <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        
        // Check if there are any categories
        if ($result->num_rows > 0) {
            echo'<div class="row ">';
            echo'<div class="row">';
            // Output data of each category
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-xl-3 col-md-4 d-flex justify-content-xl-start justify-content-center mt-4 border"">';
                        echo'<div class="card-body">';
                            echo "Product ID: " . $row["product_id"] . "<br>";
                            echo "Product Name: " . $row["product_name"] . "<br>";
                            echo "Category: " . $row["category_id"] . "<br>";
                            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" height="191" width="304"/>';
                            
                                //update category ID and name
                                echo "
                                <form  action='upload_products.php' method='POST'>
                                    <input type='hidden' name='product_id' value='". $row['product_id'] ."'>

                                    <label for='new_product_id'>New Product ID:</label>
                                    <div class='col-sm-10'>
                                        <input type='text' id='new_product_id' name='new_product_id' value='". $row['product_id'] ."'><br>
                                    </div>
                                    
                                    <label for='new_product_name'>New Product Name:</label>
                                    <input type='text' name='new_product_name' value='". $row['product_name'] ."'><br>
                                    
                                    <input type='submit' name='update' value='Update'>
                                </form>";

                            
                            //delete category
                            echo "
                            <form action='upload_products.php' method='POST'>
                            <input type='hidden' name='product_id' value='". $row['product_id'] ."'>
                            <input type='submit' name='delete' value='Delete'>
                            </form>";
                            echo "<hr>";
                        
                         echo'</div>';
                echo'</div>';
            }
            echo '</div>';
            echo '</div>';
        }else {
            echo "No products found.";
        }


        if (isset($_POST['update'])) {
            $product_id = $_POST['product_id'];
            $new_product_name = $_POST['new_product_name'];
            $new_product_id = $_POST['new_product_id'];

            $query_update = "UPDATE products SET product_id='$new_product_id', product_name='$new_product_name' WHERE product_id = $product_id";
            mysqli_query($conn, $query_update);
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
        }


        if (isset($_POST['delete'])) {
            $product_id = $_POST['product_id'];
            $query_delete = "DELETE FROM products WHERE product_id = $product_id";
            mysqli_query($conn, $query_delete);
            header("Location: upload_product.php");
            echo "<meta http-equiv='refresh' content='0'>";
            exit;
        }

        
    ?>
</div>
</div>




<?php
    include 'partials/footer.php';
?>