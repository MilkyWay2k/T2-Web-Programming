<?php
session_start();
$title = "Skate Shop - Login";
$stylesheet = "login";
$extra = "";
include "partials/header.php";
include "partials/db.php";
?>


<div class="contaier justify-content-center">
    
    <div class="row form">

    <div class="col-12 p-4">

        <div class="col">
            <a href="upload_category.php" class="btn border mb-4 mt-4">Edit Categories</a>
        </div>


        <div class="col">
            <a href="upload_products.php" class="btn border mb-4 mt-4">Edit Product</a>
        </div>


    </div>
    </div>
</div>


<?php

    include "partials/footer.php";


?>