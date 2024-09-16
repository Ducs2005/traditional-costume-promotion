<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/product_list.css">
    <title>Header</title>
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><img src="img/logo.png"></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="product_description.php">Cổ phục</a>
                <ul class="sub-menu">
                    <li><a href="">Áo giao lĩnh</a></li>
                    <li><a href="">Áo viên lĩnh</a></li>
                    <li><a href="">Áo đối khâm</a></li>
                </ul>
        
        
            </li>
            <li><a href="#">Về chúng tôi</a></li>         
            <li><a href="#">Liên lạc</a></li>
            <li><a href="account/login_register.php">Đăng nhập</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>
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
                <div class="product-card">
                    <img src="img//product/doikhamnu.jpg" alt="Sản phẩm 3">
                    <h2>Áo Đối Khâm</h2>
                    <p>Đối khâm tức vạt áo đối nhau, đối khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thõng, khoác bên ngoài, nhìn được rõ lớp áo bên trong. Loại áo này thường xẻ tà 2 bên, độ dài chưa chạm đến chân váy. Từ thời Lý – Trần nước ta đã chuộng lại áo này.</p>
                    <a href="product3-details.html" class="btn">Xem Chi Tiết</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
