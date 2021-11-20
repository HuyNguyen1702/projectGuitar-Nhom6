<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../product.css">
    <link rel="stylesheet" href="newAdd.css">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="../pagination.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>

<body>
    <?php
    include'function.php';
    session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'qlchguitar');
    $sql = "SELECT * FROM tbl_product";
    $query = mysqli_query($connect, $sql);

    if (isset($_POST['sbm'])) {
        $cate_id = $_POST['cate_id'];
        $pro_id = $_POST['pro_id'];
        $pro_name = $_POST['pro_name'];
        $pro_price = $_POST['pro_price'];
        $pro_rate = $_POST['pro_rate'];
        $pro_des = $_POST['pro_des'];
        $pro_img = $_POST['pro_img'];
        $pro_status = $_POST['pro_status'];
        $pro_band = $_POST['pro_band'];
        $sql = "INSERT INTO `tbl_product`(`cate_id`, `pro_id`, `pro_name`, `pro_price`, `pro_rate`, `pro_status`, `pro_img`, `pro_band`, `pro_des`) VALUES ('$cate_id','$pro_id','$pro_name','$pro_price','$pro_rate','$pro_status','$pro_img','$pro_band','$pro_des')";
        //$query = mysqli_query($connect,$sql);
        if ($pro_id != "") {
            if (mysqli_query($connect, $sql)) {
                $message = "Thêm thành công";
                echo "<script type='text/javascript'>alert('$message');</>";
            } else {
                $message = "Mã hàng bị trùng";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            $message = "Mã hàng bị bỏ trống";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
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
        <div class="nav-small">
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
                    <a href="/../product.php">SẢN PHẨM</a>
                </div>
                <div class="nav-item">
                    <a href="../user/user.php">TÀI KHOẢN</a>
                </div>
                <div class="nav-item">
                    <a href="../cart/cart.php">GIỎ HÀNG</a>
                </div>
            </div>
        </div>
        <div class="display-data">
            <div class="title">
                <span>THÊM SẢN PHẨM MỚI</span>
            </div>
            <div class="add">
                <form action="" method="POST">

                    <label for="fname">Mã Danh Mục</label>
                    <input type="text" id="fname" name="cate_id" placeholder="Mã danh mục">

                    <label for="fname">Mã Sản Pẩm</label>
                    <input type="text" id="fname" name="pro_id" placeholder="Mã sản phẩm">

                    <label for="lname">Tên Sản Phẩm</label>
                    <input type="text" id="lname" name="pro_name" placeholder="Tên sản phẩm">

                    <label for="lname">Giá Tiền</label>
                    <input type="number" id="lname" name="pro_price" placeholder="Giá Tiền">

                    <label for="lname">Đánh Giá</label>
                    <input type="text" id="lname" name="pro_rate" placeholder="Đánh Giá">

                    <label for="lname">Trạng Thái</label>
                    <input type="text" id="lname" name="pro_status" placeholder="Trạng Thái">

                    <label for="lname">Hình Ảnh</label>
                    <input type="file" multiple id="lname" name="pro_img" placeholder="Hình Ảnh">

                    <label for="lname">Nhãn Hàng</label>
                    <input type="text" id="lname" name="pro_band" placeholder="Nhãn Hàng">

                    <label for="lname">Mô Tả</label>
                    <textarea name="pro_des" id="content" placeholder="Mô Tả"></textarea><br>

                    <div class="btn" style="display: flex; ">
                        <div class="button-save" style="margin: 8px 10px 0px 0px;">
                            <button  type="submit" name="sbm"> LƯU </button>
                        </div>

                        <div class="btn-exit" style="margin: 8px 10px;">
                            <button >
                                <div class="exit">
                                    <a href="product.php?page_layout=show">THOÁT</a>
                                </div>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
    CKEDITOR.replace( 'pro_des', {
	filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );

</script>
<?php }
?>
</body>

</html>