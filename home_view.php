<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home view</title>

    <!-- Include CSS file -->
    <link rel="stylesheet" href="css/main.css">
</head>
<<<<<<< HEAD

<?php
    require("view/header.php");
?>

=======
>>>>>>> 3cbb4872147a55f16a16f6d84f814c480d544656
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
