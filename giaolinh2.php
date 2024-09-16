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
    <link rel="stylesheet" href="css/giaolinh.css">
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
            <li><a href="home.php">Trang chủ</a></li>
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
    
    <section class="product-info">
        <div class="container">
            <div class="product-image">
                <img src="img/product/giaolinhvatngan.jpg" alt="Áo Giao Lĩnh">
            </div>
            <div class="product-details">
                <h1>Giao lĩnh vạt ngắn</h1>
                <p class="description">
                Giao lĩnh vạt ngắn dài không quá thân trên, thường dùng cho phụ nữ. Tại Việt Nam thời Lê, giao lĩnh vạt ngắn có thường quây bên ngoài, tương tự các thời kỳ trước của Trung Quốc, có nét tương đồng với giao lĩnh quây hakama của Nhật.
Tuy nhiên giao lĩnh vạt ngắn quây thường triều Lê có thể phân biệt với giao lĩnh vạt ngắn quây thường của các triều đại ở Trung Quốc ở chỗ chiếc thường bên ngoài ngắn hơn chiếc thường (hoặc váy) bên trong, để lộ hai lớp váy. Trong khi đó, ở Trung Quốc (cũng như Nhật Bản và Triều Tiên), chiếc thường bên ngoài dài đến sát đất, che kín chiếc thường (hoặc váy) bên trong.
                </p>
                <a href="giaolinhvatngan.php" class="flip">Trang sau</a>
            </div>
        </div>
    </section>
</body>
</html>
