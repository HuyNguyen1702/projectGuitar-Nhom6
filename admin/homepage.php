
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/admin.css">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../admin/product/pro.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            font-family: 'Work Sans', sans-serif;
        }
    </style>
</head>

<body>
    <?php
        session_start();
        $currentUser = $_SESSION['current_user'];
        if($currentUser['user_mode'] == 0 || empty($_SESSION['current_user']) ){
            header('Location: ../Error404.php');
        }
    ?>
    <header style="background-color: #0984e3;">
        <div class="cnt">
            <div class="logo">
                <span><a href="homepage.php" style="text-decoration: none; color:white;">Guitar Station</a></span>
            </div>
            <div class="in-out" style="margin-right: 50px;">
                <div class="name"><?php 
                
                $currentUser = $_SESSION['current_user'];
                ?>
                    <p>Online: <?= $currentUser['user_name'] ?></p>
                </div>
                <button><a href="../logout.php">Đăng xuất</a></button>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="nav-small" style="height: calc(100vh - 80px); width:192px;">
            <div class="nav-small_left">
                <div class="nav-item">
                    <a href="./homepage.php">TỔNG QUAN</a>
                </div>
                <div class="nav-item">
                    <a href="./menu/menu.php">DANH MỤC</a>
                </div>
                <div class="nav-item">
                    <a href="./cate/cate.php">MẶT HÀNG</a>
                </div>
                <div class="nav-item">
                    <a href="./product/product.php">SẢN PHẨM</a>
                </div>
                <div class="nav-item">
                    <a href="./user/user.php">TÀI KHOẢN</a>
                </div>
                <div class="nav-item">
                    <a href="./cart/cart.php">GIỎ HÀNG</a>
                </div>
            </div>
        </div>
        <div class="display-data" style="margin: auto;">
            <div class="grid-container">
                <a href="./cate/cate_show.php">
                    <div class="grid-item" style="background-color: #ff7675;" >DANH MỤC</div>
                </a>
                <a href="./product/pro_show.php" >
                    <div class="grid-item" style="background-color: #55efc4;">SẢN PHẨM</div>
                </a>
                <a href="./user/user_show.php" >
                    <div class="grid-item" style="background-color: #74b9ff;">TÀI KHOẢN</div>
                </a>
                <a href="./cart/cart_show.php" >
                    <div class="grid-item" style="background-color: #a29bfe;">GIỎ HÀNG</div>
                </a>
            </div>

        </div>
    </div>
</body>

</html>