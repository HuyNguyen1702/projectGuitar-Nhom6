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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>

<body>
    <?php
    session_start();
    $pro_id = $_GET['pro_id'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlchguitar');
    $sql = "SELECT * FROM `tbl_product` where pro_id=$pro_id";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);

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
        $sql = "UPDATE `tbl_product` SET `cate_id`='$cate_id',`pro_id`='$pro_id',`pro_name`='$pro_name',`pro_price`='$pro_price',`pro_rate`='$pro_rate',`pro_status`='$pro_status',`pro_img`='$pro_img',`pro_band`='$pro_band',`pro_des`='$pro_des' WHERE `pro_id` = '$pro_id'";
        //  if(mysqli_query($connect,$sql)){
        //     $message = "Sửa thành công";
        //     echo "<script type='text/javascript'>alert('$message');</script>";
        //  }
        if(mysqli_query($connect, $sql)){
        header('location:product.php?page_layout=show');    
        }else{
            echo "Loi"; exit;
        }
        // $query = mysqli_query($connect, $sql);
        // header('location:product.php?page_layout=show');
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
                    <a href="product.php">SẢN PHẨM</a>
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
                <span>SỬA SẢN PHẨM</span>
            </div>
            <div class="add">
                <form action="" method="POST">

                    <label for="fname">Mã Danh Mục</label>
                    <input type="text" id="fname" name="cate_id" placeholder="Mã danh mục" require value="<?php echo $row['cate_id']; ?>">

                    <label for="fname">Mã Sản Pẩm</label>
                    <input type="text" id="fname" name="pro_id" placeholder="Mã sản phẩm" readonly required value="<?php echo $row['pro_id']; ?>">

                    <label for="lname">Tên Sản Phẩm</label>
                    <input type="text" id="lname" name="pro_name" placeholder="Tên sản phẩm" required value="<?php echo $row['pro_name']; ?>">

                    <label for="lname">Giá Tiền</label>
                    <input type="number" id="lname" name="pro_price" placeholder="Giá Tiền" required value="<?php echo $row['pro_price']; ?>">

                    <label for="lname">Đánh Giá</label>
                    <input type="text" id="lname" name="pro_rate" placeholder="Đánh Giá" required value="<?php echo $row['pro_rate']; ?>">

                    <label for="lname">Trạng Thái</label>
                    <input type="text" id="lname" name="pro_status" placeholder="Trạng Thái" required value="<?php echo $row['pro_status']; ?>">

                    <label for="lname">Hình Ảnh</label><br>
                    <img src="../../img/product/<?php echo $row['pro_img'] ?>" alt=""><br>
                    <input type="file" multiple="" id="lname" name="pro_img" placeholder="Hình Ảnh">

                    <label for="lname">Nhãn Hàng</label>
                    <input type="text" id="lname" name="pro_band" placeholder="Nhãn Hàng" required value="<?php echo $row['pro_band']; ?>">

                    <label for="lname">Mô Tả</label>
                    <textarea type="text" id="lname" name="pro_des" placeholder="Mô Tả" required value=""><?php echo $row['pro_des']; ?></textarea>

                    <div class="btn" style="display: flex; ">
                        <div class="button-save" style="margin: 8px 10px 0px 0px;">
                            <button type="submit" name="sbm"> LƯU </button>
                        </div>

                        <div class="btn-exit" style="margin: 8px 10px;">
                            <button>
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
<?php
    }
    ?>
</body>

</html>