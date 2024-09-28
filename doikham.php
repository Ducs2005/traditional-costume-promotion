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
    <?php include('view/header.php') ?>
    <section class="product-info">
        <div class="container">
            <div class="product-image">
                <img src="img/product/doikhamnu.jpg" alt="Áo Đối Khâm">
            </div>
            <div class="product-details page active" id="doi kham">
                <h1>Áo Đối Khâm</h1>
                <p class="description">
                Đối khâm là vạt áo đối nhau (có thể gọi là Trực lĩnh), là một loại áo mà vạt áo mở song song trước ngực người mặc. Loại áo này là một dạng áo khoác mặc thêm ngoài cùng, tương đối dùng được cho nam giới lẫn nữ giới.
                Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Áo nhật bình vào thời Nguyễn hay áo tứ thân cũng là một dạng của áo đối khâm. Mỗi thời đại, kiểu dáng sẽ thay đổi đôi chút. Không như giao lĩnh và viên lĩnh (có 6 thân), hay thụ lĩnh triều Nguyễn (có 5 thân – còn được gọi là ngũ thân), đối khâm chỉ có 4 thân nên dân gian còn gọi là tứ thân.
                </p>

                <h1>Áo Nhật Bình</h1>
                <p class="description">
                Nhật bình thuộc dạng thức áo đối khâm khoác bên ngoài áo dài tay chẽn hoặc áo tấc, được cài khuy chính giữa. Ngoài ra, nút áo tròn bằng ngọc điêu khắc tinh xảo dùng để trang trí chính là điểm đặc trưng của nhật bình so với áo đối khâm phi phong nhà Minh.
                Nguồn gốc Áo Nhật Bình được nhà Nguyễn phát triển lên, là dạng áo Đối Khâm có cổ hình chữ nhật to bản, dùng dây buộc 2 vạt áo. Do hoa văn ở cổ áo khi ghép lại tạo thành một hình chữ nhật ngay trước ngực người mặc, nên áo này gọi là áo Nhật Bình. Khắp thân áo trang trí theo thể thức hoa văn chính là dạng hình tròn khép kín, rải rác khắp áo đan xen với các hình phượng múa, hoa lá đính thêm các hạt tuyến lấp lánh. Ở tay áo đặc biệt có dải màu ngũ hành; lục, vàng, xanh, trắng, đỏ. Tuy nhiên quy chế tay dãy màu này lại không áp dụng trên loại áo Nhật Bình của bậc Hậu.
                </p>
                </a><button onclick="switchPage('doikham2')" class="flip">Trang tiếp</button>
            </div>

            <div class="product-details page" id="doikham2">
                <h1>Áo tứ thân</h1>
                <p class="description">
                Theo các nhà nghiên cứu lịch sử, áo tứ thân là sự tiến hóa từ áo đối khâm. Trong thế kỷ 20, trang phục của phụ nữ cần phải đơn giản để phù hợp với công việc nông nghiệp. Do đó, áo đối khâm đã được cải tiến để trở thành áo tứ thân như chúng ta biết ngày nay.

Mặc dù vậy, áo tứ thân vẫn giữ được thiết kế cổ áo đặc trưng. Khi mặc, người phụ nữ sẽ buộc hai tà áo phía trước lại với nhau để tạo nên vẻ ngoài gọn gàng, thuận tiện cho việc làm việc.

                </p>
                </a><button onclick="switchPage('doikham')" class="flip">Trang sau</button>
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
