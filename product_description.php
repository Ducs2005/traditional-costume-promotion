<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="css/product_description.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('view/header.php') ?>
    <br><br><br><br><br><br>

    <div class="container">
        <a href="product_list.php" class="back-button">← Back to Products</a>

        <div class="product-details">
            <div class="product-image-gallery">
                <div class="carousel">
                    <span class="arrow prev" onclick="prevImage()">&#8249;</span> <!-- Left arrow -->
                    <img id="productImage" src="" alt="Product Image">
                    <span class="arrow next" onclick="nextImage()">&#8250;</span> <!-- Right arrow -->
                </div>
                <div class="thumbnail-container">
                    <img class="thumbnail" src="img/product/img1.jpg" onclick="setImage('img/product/img1.jpg')" alt="Thumbnail 1">
                    <img class="thumbnail" src="img/product/img2.jpg" onclick="setImage('img/product/img2.jpg')" alt="Thumbnail 2">
                    <img class="thumbnail" src="img/product/img3.jpg" onclick="setImage('img/product/img3.jpg')" alt="Thumbnail 3">
                </div>
            </div>
            <div class="product-info">
                <h1 id="productName">Product Name</h1>
                <p id="productPrice">Price</p>
                <p id="productDescription">Product Description</p>
            </div>
        </div>
    </div>

    <script>
        const products = [
            {
                id: 1,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ] 
            },
                {
                id: 2,
                name: "Áo ngũ thân cách tân viền lục giác (Unisex)",
                price: "390.000₫",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ]             },
            {
                id: 3,
                name: "Áo Ngũ Thân cách tân Xuân Hiểu",
                price: "890.000₫",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ]             },
            {
                id: 4,
                name: "Áo mới 1",
                price: "500.000₫",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ]             },
            {
                id: 5,
                name: "Áo mới 2",
                price: "450.000₫",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ]             },
            {
                id: 6,
                name: "Áo mới 3",
                price: "300.000₫",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ]             },
        ];
        let currentImageIndex = 0;
        let currentProduct = {};

        function getProductDetails() {
            const params = new URLSearchParams(window.location.search);
            const productId = parseInt(params.get('id'));
            currentProduct = products.find(p => p.id === productId);

            if (currentProduct) {
                setImage(currentProduct.images[0]); // Set the first image
                document.getElementById('productName').innerText = currentProduct.name;
                document.getElementById('productPrice').innerText = currentProduct.price;
                document.getElementById('productDescription').innerText = currentProduct.description || "This is a wonderful product. Don't miss out!";
            }
        }

        // Function to set image based on the thumbnail clicked or arrows
        function setImage(image) {
            document.getElementById('productImage').src = image;
        }

        // Function to navigate to the next image
        function nextImage() {
            if (currentImageIndex < currentProduct.images.length - 1) {
                currentImageIndex++;
            } else {
                currentImageIndex = 0; // Loop back to the first image
            }
            setImage(currentProduct.images[currentImageIndex]);
        }

        // Function to navigate to the previous image
        function prevImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
            } else {
                currentImageIndex = currentProduct.images.length - 1; // Loop back to the last image
            }
            setImage(currentProduct.images[currentImageIndex]);
        }

        // Initialize the page on load
        window.onload = getProductDetails;
    </script>


    <?php include('view/product.php');?>
    <?php include('view/footer.php') ?>
</body>

</html>
