<?php 
    if (!isset($_SESSION) || session_id()=="" || session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <title>Header</title>
</head>
<body>
    <header>        
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><img src="img/logo.png"></div>
            
        <div class="search-box">
            <form action="#" method="post">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="menubar">
            <?php if (isset($_SESSION['name'])){ ?>
            <li><span><?= htmlspecialchars($_SESSION['name']); ?></span></li>
                <ul class="sub-menu">
                    <li><a href="../account/logout.php">Logout</a></li>
                </ul>
            <?php   }
            else { ?>
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
                    <li><a href="./account/login.php">Đăng nhập</a></li>
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
            <?php } ?>
        </div>       
    </header>
</body>
</html>
