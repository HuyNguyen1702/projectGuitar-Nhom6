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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php
session_start();
$connect = mysqli_connect('localhost','root','','qlchguitar');
$sql = "SELECT * FROM tbl_category";
$query = mysqli_query($connect,$sql);

if(isset($_POST['sbm'])){
    $menu_id = $_POST['menu_id'];
     $cate_id = $_POST['cate_id'];
     $cate_name = $_POST['cate_name'];
     $cate_status = $_POST['cate_status'];
     $sql = "INSERT INTO `tbl_category`(`menu_id`,`cate_id` ,`cate_name`,`cate_status`) VALUES ('$menu_id','$cate_id','$cate_name','$cate_status')";
     //$query = mysqli_query($connect,$sql);
     if($cate_name!=""){
        if(mysqli_query($connect,$sql)){
            $message = "Thêm thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:cate.php?page_layout=show');
        }else {
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
        <div class="nav-small" style="height: calc(100vh - 80px); width:192px;">
            <div class="nav-small_left">
                <div class="nav-item">
                    <a href="../homepage.php">TỔNG QUAN</a>
                </div>
                <div class="nav-item">
                    <a href="../menu/menu.php">DANH MỤC</a>
                </div>
                <div class="nav-item">
                    <a href="cate.php">MẶT HÀNG</a>
                </div>
                <div class="nav-item">
                    <a href="../product/product.php">SẢN PHẨM</a>
                </div>
                <div class="nav-item">
                    <a href="../user/user.php">TÀI KHOẢN</a>
                </div>
                <div class="nav-item">
                    <a href="../cart/cart.php">GIỎ HÀNG</a>
                </div>
            </div>
        </div>
        <div class="display-data" style="width: 1630px">
            <div class="title">
                <span>THÊM MẶT HÀNG MỚI</span>
            </div>
            <div class="add">
                <form action="" method="POST">
                
                    <label for="fname">Mã Danh Mục</label>
                    <input type="text" id="fname" name="menu_id" placeholder="Mã danh mục">

                    <label for="fname">Mã Mặt Hàng</label>
                    <input type="text" id="fname" name="cate_id" placeholder="Mã mặt hàng">

                    <label for="fname">Tên Mặt Hàng</label>
                    <input type="text" id="fname" name="cate_name" placeholder="Tên mặt hàng">

                    <label for="fname">Trạng Thái</label>
                    <input type="text" id="fname" name="cate_status" placeholder="Trạng thái">

                    <div class="btn" style="display: flex; ">
                        <div class="button-save" style="margin: 8px 10px 0px 0px;">
                            <button  type="submit" name="sbm"> LƯU </button>
                        </div>

                        <div class="btn-exit" style="margin: 8px 10px;">
                            <button >
                                <div class="exit">
                                    <a href="cate.php?page_layout=show">THOÁT</a>
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