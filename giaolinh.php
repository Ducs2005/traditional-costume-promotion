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
    <style>
        .page {
            display: none;
        }
        .active {
            display: block;
        }
    </style>
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
                <img src="img/product/giaolinhnu.jpg" alt="Áo Giao Lĩnh">
            </div>
            <div class="product-details page active" id="giaolinh">
                <h1>Áo Giao Lĩnh</h1>
                <p class="description">
                Áo giao lĩnh còn được biết đến với tên trường lĩnh, tràng vạt, đối lĩnh là một dạng áo cổ nhất của văn hóa Đông Á. Loại áo này có cổ áo giao nhau ở trước ngực, và vạt nằm trên sẽ chéo qua bên phải của người mặc, bên trái của người nhìn. Từ xưa, loại áo này thường có nhiều kiểu ống tay áo, nhưng chủ yếu phân biệt ở dạng tay thụng rộng hoặc tay hẹp bó sát.
                Kiểu áo này phổ biến ở Việt Nam vào thời Lý - Trần - Lê, cho đến năm 1744 khi có lệnh sửa đổi cách ăn mặc của người Đàng Trong. Ở Đàng Ngoài áo cổ chéo tiếp tục có mặt cho đến khi nhà Nguyễn dẹp nhà Tây Sơn, thống nhất sơn hà.
                </p>
                <h1>Giao lĩnh vạt dài</h1>
                <p class="description">Giao lĩnh vạt dài dài quá đầu gối, cả nam lẫn nữ đều mặc. Khi mặc thì áo phủ bên ngoài thường (1 loại váy quây che hạ thể, cố định bởi 1 dây buộc lụa ở vùng hông). Dạng phục trang này phổ biến tại cả 4 nước Việt, Trung, Hàn, Nhật, song thay đổi qua các thời kỳ và nhiều khác biệt về tiểu tiết có thể dùng để nhận dạng.
Điểm đặc biệt của áo lĩnh vạt dài triều Lê là có cổ cong võng. Kiểu cổ giao lĩnh này được thấy khá phổ biến từ đời Tống về trước, song đến triều Minh, cổ giao lĩnh thẳng hơn và kéo kín hơn, làm nên sự khác biệt giữa giao lĩnh triều Lê và Minh cũng như Triều Tiên (vốn chịu ảnh hưởng bởi phục sức Minh).
Một điểm nữa có thể dùng để nhận biết là váy của Minh và Triều Tiên thường có nếp gấp còn váy thời Lê thì không.
                </p>
                </a><button onclick="switchPage('giaolinh2')" class="flip">Trang tiếp</button>
            </div>

            <div class="product-details page" id="giaolinh2">
                <h1>Giao lĩnh vạt ngắn</h1>
                <p class="description">
                Giao lĩnh vạt ngắn dài không quá thân trên, thường dùng cho phụ nữ. Tại Việt Nam thời Lê, giao lĩnh vạt ngắn có thường quây bên ngoài, tương tự các thời kỳ trước của Trung Quốc, có nét tương đồng với giao lĩnh quây hakama của Nhật.
Tuy nhiên giao lĩnh vạt ngắn quây thường triều Lê có thể phân biệt với giao lĩnh vạt ngắn quây thường của các triều đại ở Trung Quốc ở chỗ chiếc thường bên ngoài ngắn hơn chiếc thường (hoặc váy) bên trong, để lộ hai lớp váy. Trong khi đó, ở Trung Quốc (cũng như Nhật Bản và Triều Tiên), chiếc thường bên ngoài dài đến sát đất, che kín chiếc thường (hoặc váy) bên trong.
                </p>
                </a><button onclick="switchPage('giaolinh')" class="flip">Trang sau</button>
            </div>
        </div>
    </section>
    <script>
        function switchPage(pageId) {
            const pages = document.querySelectorAll('.page');
            pages.forEach(page => page.classList.remove('active'));

            document.getElementById(pageId).classList.add('active');
        }
    </script>
</body>
</html>
