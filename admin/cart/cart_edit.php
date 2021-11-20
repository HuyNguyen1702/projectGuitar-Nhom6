<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../product.css">
    <link rel="stylesheet" href="../product/newAdd.css">
    <link rel="stylesheet" href="../product/pro.css">
    <link rel="stylesheet" href="../product/button.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $cart_id = $_GET['cart_id'];
    
    $connect = mysqli_connect('localhost', 'root', '', 'qlchguitar');
    $sql = "SELECT * FROM `tbl_cartinf` where cart_id=$cart_id";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);

    if (isset($_POST['sbm'])) {

        $user_id = $_POST['user_id'];
        $pro_id = $_POST['pro_id'];
        $cart_soluong = $_POST['cart_soluong'];
        $cart_price = $_POST['cart_price'];

        $sql = "UPDATE tbl_cartinf SET user_id=$user_id,pro_id=$pro_id, cart_soluong=$cart_soluong, cart_price=$cart_price WHERE cart_id=$cart_id";
        // if(mysqli_query($connect,$sql)){
        //     echo 'hello';
        // }

        mysqli_query($connect,$sql);

        header('location:cart.php?page_layout=show');
    }
    ?>
    <?php 
    if (empty($_SESSION['current_user'])) { 
        ?>
            Chua dang nhap , dang nhap tai
            <a href="../login.php">Tai day</a>
        <?php } else {
            $currentUser = $_SESSION['current_user'];
        ?>
        <header style="background-color: #0984e3;">
                <div class="cnt">
                    <div class="logo">
                    <span><a href="../homepage.php" style="text-decoration: none; color:white;">Guitar Station</a></span>
                    </div>
                    <div class="in-out" style="margin-right: 50px;">
                        <div class="name">
                            <p>Online: <?= $currentUser['user_name'] ?></p>
                        </div>
                        <button><a href="../../logout.php">Đăng xuất</a></button>
                    </div>
                </div>
            </header>
            <div class="main">
        <div class="nav-small" style="height: calc(100vh - 80px); width:192px;">
            <div class="nav-small_left">
                <div class="nav-item">
                    <a href="../homepage.php">TỔNG QUAN</a>
                </div>
                <div class="nav-item">
                    <a href="../menu/menu.php">DANH MỤC</a>
                </div>
                <div class="nav-item">
                    <a href="../cate/cate.php">MẶT HÀNG</a>
                </div>
                <div class="nav-item">
                    <a href="../product/product.php">SẢN PHẨM</a>
                </div>
                <div class="nav-item">
                    <a href="../user/user.php">TÀI KHOẢN</a>
                </div>
                <div class="nav-item">
                    <a href="cart.php">GIỎ HÀNG</a>
                </div>
            </div>
        </div>
        <div class="display-data" style="width: 1630px">
            <div class="title">
                <span>SỬA SẢN PHẨM</span>
            </div>
            <div class="add">
                <form action="" method="POST">

                    <label for="fname">Mã Sản Phẩm</label>
                    <input type="text" id="fname" name="pro_id" placeholder="Mã sản phẩm" require value="<?php echo $row['pro_id']; ?>">

                    <label for="fname">Mã Người Dùng</label>
                    <input type="text" id="fname" name="user_id" placeholder="Mã người dùng" readonly required value="<?php echo $row['user_id']; ?>">

                    <label for="fname">Số Lượng</label>
                    <input type="text" id="fname" name="cart_soluong" placeholder="Số lượng" required value="<?php echo $row['cart_soluong']; ?>">

                    <label for="fname">Đơn Giá</label>
                    <input type="text" id="fname" name="cart_price" placeholder="Đơn giá" required value="<?php echo $row['cart_price']; ?>">

                    <div class="btn" style="display: flex; ">
                        <div class="button-save" style="margin: 8px 10px 0px 0px;">
                            <button  type="submit" name="sbm"> LƯU </button>
                        </div>

                        <div class="btn-exit" style="margin: 8px 10px;">
                            <button >
                                <div class="exit">
                                    <a href="cart.php?page_layout=show">THOÁT</a>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>

</html>