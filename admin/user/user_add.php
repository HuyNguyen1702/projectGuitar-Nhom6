<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../product.css">
    <link rel="stylesheet" href="../product/pro.css">
    <link rel="stylesheet" href="../product/button.css">
    <link rel="stylesheet" href="../product/newAdd.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php
session_start();
$connect = mysqli_connect('localhost','root','','qlchguitar');
$sql = "SELECT * FROM tbl_user";
$query = mysqli_query($connect,$sql);

if(isset($_POST['sbm'])){
     
     $user_name = $_POST['user_name'];
     $user_pass = $_POST['user_pass'];
     $user_phone = $_POST['user_phone'];
     $user_address = $_POST['user_address'];
     $user_email = $_POST['user_email'];
     $user_mode = $_POST['user_mode'];
     $sql = "INSERT INTO `tbl_user`(`user_name`, `user_pass`, `user_phone`, `user_address`,`user_email`,`user_mode`) VALUES ('$user_name','$user_pass','$user_phone','$user_address','$user_email','$user_mode')";
     //$query = mysqli_query($connect,$sql);
     if($user_name!=""){
        if(mysqli_query($connect,$sql)){
            $message = "Thêm thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('location:user.php?page_layout=show');
        }else {
            $message = "Tên tài khoản bị trùng";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
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
                    <a href="../cate/cate.php">MẶT HÀNG</a>
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
        <div class="display-data">
            <div class="title">
                <span>THÊM TÀI KHOẢN MỚI</span>
            </div>
            <div class="add">
                <form action="" method="POST">
                
                    <!-- <label for="fname">Mã Tài Khoản</label>
                    <input type="text" id="fname" name="user_id" placeholder="Mã Tài Khoản"> -->

                    <label for="fname">Tên Tài Khoản</label>
                    <input type="text" id="fname" name="user_name" placeholder="Tên tài khoản">

                    <label for="lname">Mật Khẩu</label>
                    <input type="text" id="lname" name="user_pass" placeholder="Mật Khẩu">

                    <label for="lname">Số Điện Thoại</label>
                    <input type="number" id="lname" name="user_phone" placeholder="Số Điện Thoại">

                    <label for="lname">Địa Chỉ</label>
                    <input type="text" id="lname" name="user_address" placeholder="Địa Chỉ">

                    <label for="lname">Email</label>
                    <input type="text" id="lname" name="user_email" placeholder="Email">

                    <label for="lname">Trạng thái</label>
                    <input type="text" id="lname" name="user_mode" placeholder="Trạng thái">

                    <div class="btn" style="display: flex; ">
                        <div class="button-save" style="margin: 8px 10px 0px 0px;">
                            <button  type="submit" name="sbm"> LƯU </button>
                        </div>

                        <div class="btn-exit" style="margin: 8px 10px;">
                            <button >
                                <div class="exit">
                                    <a href="user_show.php">THOÁT</a>
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