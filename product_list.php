<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home view</title>

    <!-- Include CSS file -->
</head>

<body>
    <?php
        include("view/header.php");
    ?>
    <?php include('view/chat_window.php') ?>
    
    <br><br><br><br> <br><br><br>

    <?php 
        include("view/banner.php"); 
    ?>

    <br><br><br>

    <?php
        include("view/product.php");
    ?>

    <br><br><br>

   

    <?php
        include("view/footer.php");
    ?>

   
<!-- Include the products.js script -->
<script src="js/products.js"></script>

</body>


</html>
