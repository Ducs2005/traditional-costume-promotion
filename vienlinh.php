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
                <img src="img/product/vienlinhnam2.jpg" alt="Áo Viên Lĩnh">
            </div>
            <div class="product-details page active" id="vien linh">
                <h1>Áo Viên Lĩnh</h1>
                <p class="description">
                Cũng như giao lĩnh, áo viên lĩnh cũng có những biến thể, chủ yếu là ở hình dạng tay áo rộng hay chẽn. Loại áo này cũng phối hợp với thường, phủ ra ngoài hoặc mặc bên trong tùy ý của người mặc. Vào thời Lê, Nguyễn áo viên lĩnh là kiểu áo chính thức nhất của tầng lớp quan viên và triều đình.
                Vào thời Lý, áo viên lĩnh thường có bốn vạt ở trước như trong lời tả của Chu Khứ Phi thời Tống,”Những người còn lại, ngày thường trên thì vận áo Sam đen cổ tròn bó sát, bốn vạt như áo Bối Tử, gọi là áo Tứ Điên; dưới thì vận thường đen.” (trích Ngàn Năm Áo Mũ). Loại viên lĩnh bốn vạt này có thể còn tồn tại đến thời Lê.
                </p>
                <h1>Viên lĩnh vạt dài</h1>
                <p class="description">Viên lĩnh vạt dài thường được mặc phủ bên ngoài thường.</p>
 
                <h1>Viên lĩnh vạt ngắn</h1>
                <p class="description">
                Viên lĩnh vạt ngắn thường có thường quây bên ngoài, và thường dùng cho phụ nữ.
                </p>
 
    </section>
</body>
</html>
