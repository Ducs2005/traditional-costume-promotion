<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="css/product_description.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<?php include('view/header.php') ?>

<body>
    <?php include('view/header.php') ?>
    <section class="Category">
        <div class="container">
            <h1>Danh Mục Sản Phẩm</h1>
            <div class="product-grid">
                <div class="product-card">
                    <img src="img//product/giaolinhnu.jpg" alt="Sản phẩm 1">
                    <h2>Áo Giao Lĩnh</h2>
                    <p>Áo giao lĩnh là áo có phần cổ giao nhau ở trước ngực, vạt trái đè lên vạt phải, tay áo chủ yếu là loại tay thụng và tay hẹp. Mang đậm âm hưởng văn hóa Đông Á nhưng áo giao lĩnh Việt Nam vẫn có nét riêng là hai vạt váy trong và ngoài không bằng nhau. Vậy nên đây là trang phục mang đậm bản sắc văn hóa Việt.</p>
                    <a href="giaolinh.php" class="btn">Xem Chi Tiết</a>
                </div>
                <div class="product-card">
                    <img src="img//product/vienlinhnam.jpg" alt="Sản phẩm 2">
                    <h2>Áo Viên Lĩnh</h2>
                    <p>Áo viên lĩnh còn gọi là áo cổ tròn, cổ kiềng… gài cúc bên vai phải. Dạng áo này tương tự như giao lĩnh, nhưng áo là dạng cổ tròn thay vì cổ giao nhau, cũng có dạng vạt ngắn và vạt dài. Vào thời Lê, Nguyễn áo viên lĩnh là kiểu áo chính thức nhất của tầng lớp quan viên và triều đình.</p>
                    <a href="product2-details.html" class="btn">Xem Chi Tiết</a>
                </div>
            </div>
            
            <div class="product-info">
                <h1 id="productName">Product Name</h1>
                <p id="productPrice">Price</p>
                <p id="productDescription">Product Description: This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.</p>

                <!-- Product Tags -->
                <div class="product-tags">
                    <strong>Tags:</strong>
                    <ul>
                        <li>Traditional Wear</li>
                        <li>Silk</li>
                        <li>Áo Dài</li>
                        <li>Formal Wear</li>
                        <li>Unisex</li>
                    </ul>
                </div>

                <!-- Add to Cart Button -->
                <button class="add-to-cart-btn" onclick="addToCart()">Add to Cart</button>
            </div>
        </div>
    </div>

    <script>
        const products = [
            {
                id: 1,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            {
                id: 2,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },{
                id: 3,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            {
                id: 4,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            {
                id: 5,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },{
                id: 6,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "img/product/img1.jpg",
                    "img/product/img2.jpg",
                    "img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            // Other products...
        ];

        let currentImageIndex = 0;
        let currentProduct = {};

        function getProductDetails() {
    const params = new URLSearchParams(window.location.search);
    const productId = parseInt(params.get('id'));
    currentProduct = products.find(p => p.id === productId);

    if (currentProduct) {
        setImage(currentProduct.images[0]);
        document.getElementById('productName').innerText = currentProduct.name;
        document.getElementById('productPrice').innerText = currentProduct.price;
        document.getElementById('productDescription').innerText = currentProduct.description;
        
        const tagsContainer = document.querySelector('.product-tags ul');
        tagsContainer.innerHTML = '';
        currentProduct.tags.forEach(tag => {
            const li = document.createElement('li');
            const a = document.createElement('a'); // Create an anchor tag
            a.textContent = tag;
            a.href = "#"; // Temporary href, can be updated to something meaningful
            a.classList.add('clickable-tag'); // Add a class for styling
            a.onclick = function() {
                alert(`Tag clicked: ${tag}`);
                // Future functionality can be added here
            };
            li.appendChild(a);
            tagsContainer.appendChild(li);
        });
    }
}

        function setImage(image) {
            document.getElementById('productImage').src = image;
        }

        function nextImage() {
            if (currentImageIndex < currentProduct.images.length - 1) {
                currentImageIndex++;
            } else {
                currentImageIndex = 0;
            }
            setImage(currentProduct.images[currentImageIndex]);
        }

        function prevImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
            } else {
                currentImageIndex = currentProduct.images.length - 1;
            }
            setImage(currentProduct.images[currentImageIndex]);
        }

        function addToCart() {
            alert(`${currentProduct.name} has been added to your cart!`);
            // Here you can add the functionality to update the cart in your application
        }

        window.onload = getProductDetails;
    </script>
    <?php include('view/product.php') ?>
    <?php include('view/footer.php') ?>
</body>

</html>
