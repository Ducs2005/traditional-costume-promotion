<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home view</title>

    <!-- Include CSS file -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
    include("view/header.php");
?>

<!-- Add content spacing -->
<br><br><br><br>

<?php 
    include("view/banner.php"); 
?>

<br><br><br>

<?php
    include("view/product_list.php");
?>

<br><br><br>

<?php
    include("view/footer.php");
?>

<!-- Include the products.js script -->
<script src="js/products.js"></script>

</body>
</html>
