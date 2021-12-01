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
     <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php
session_start();
$menu_id = $_GET['menu_id'];
$connect = mysqli_connect('localhost','root','','qlchguitar');
$sql = "SELECT * FROM `tbl_menu` where menu_id=$menu_id";
$query = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($query);

if(isset($_POST['sbm'])){
     $menu_id = $_POST['menu_id'];
     $menu_name = $_POST['menu_name'];
     $sql = "UPDATE `tbl_menu` SET `menu_id`='$menu_id',`menu_name`='$menu_name' WHERE `menu_id`='$menu_id'";
     if(mysqli_query($connect,$sql)){
        $message = "Sửa thành công";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('location:menu.php?page_layout=show');
     }else{
         echo "Loi"; exit;
     }
    // $query = mysqli_query($connect,$sql);
    
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
                    <a href="menu_show.php">DANH MỤC</a>
                </div>
                <div class="nav-item">
                    <a href="../cate/cate.php">MẶT HÀNG</a>
                </div>
                <div class="nav-item">
                    <a href="../product/pro_show.php">SẢN PHẨM</a>
                </div>
                <div class="nav-item">
                    <a href="../user/user_show.php">TÀI KHOẢN</a>
                </div>
                <div class="nav-item">
                    <a href="../cart/cart.php">GIỎ HÀNG</a>
                </div>
            </div>
        </div>
        <div class="display-data">
            <div class="title">
                <span>SỬA DANH MỤC</span>
            </div>
            <div class="add" style="width: 1630px">
                <form action="" method="POST">
                
                    <label for="fname">Mã Danh Mục</label>
                    <input type="text" id="fname" name="menu_id" placeholder="Mã danh mục" readonly require value="<?php echo $row['menu_id']; ?>">

                    <label for="fname">Tên Danh Mục</label>
                    <input type="text" id="fname" name="menu_name" placeholder="Tên sản phẩm"  required value="<?php echo $row['menu_name']; ?>">

                    <div class="btn" style="display: flex; ">
                        <div class="button-save" style="margin: 8px 10px 0px 0px;">
                            <button  type="submit" name="sbm"> LƯU </button>
                        </div>

                        <div class="btn-exit" style="margin: 8px 10px;">
                            <button >
                                <div class="exit">
                                    <a href="menu.php?page_layout=show">THOÁT</a>
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