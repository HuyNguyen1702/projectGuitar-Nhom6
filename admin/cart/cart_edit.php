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
    $order_id = $_GET['order_id'];
    $pro_id = $_GET['pro_id'];
    $cart_id = $_GET['cart_id'];
    $connect = mysqli_connect('localhost', 'root', '', 'qlchguitar');
    $sql = "SELECT tbl_cartinf.cart_id,tbl_cartinf.order_id, tbl_cartmain.order_name,tbl_cartmain.order_address,tbl_cartmain.order_address2,tbl_cartmain.order_address3,tbl_cartmain.order_address4,tbl_cartmain.order_phone,tbl_product.pro_name,tbl_cartinf.cart_soluong,tbl_cartinf.cart_price,tbl_cartinf.cart_total,tbl_cartmain.order_note
    FROM tbl_cartinf,tbl_cartmain,tbl_product WHERE tbl_product.pro_id=tbl_cartinf.pro_id and tbl_cartmain.order_id='".$order_id."' and tbl_cartinf.order_id='".$order_id."' and tbl_cartinf.cart_id='".$cart_id."'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);
    if (isset($_POST['sbm'])) {
        $order_name = $_POST['order_name'];
        $order_address =$_POST['order_address'];
        $order_address2 =$_POST['order_address2'];
        $order_address3 =$_POST['order_address3'];
        $order_address4 =$_POST['order_address4'];
        $order_phone =$_POST['order_phone'];
        $cart_soluong = $_POST['cart_soluong'];
        $cart_price = $_POST['cart_price'];
        $order_note = $_POST['order_note'];
        $sql1="UPDATE tbl_cartinf,tbl_cartmain SET tbl_cartinf.cart_soluong='".$cart_soluong."',tbl_cartmain.order_name='".$order_name."',tbl_cartmain.order_address='".$order_address."',tbl_cartmain.order_address2='".$order_address2."',tbl_cartmain.order_address3='".$order_address3."',tbl_cartmain.order_address4='".$order_address4."',tbl_cartmain.order_phone='".$order_phone."',tbl_cartmain.order_note='".$order_note."' 
        WHERE tbl_cartinf.cart_id='".$cart_id."' and tbl_cartmain.order_id='".$order_id."'";
        $sql2="UPDATE tbl_cartinf,tbl_cartmain SET tbl_cartinf.cart_total=tbl_cartinf.cart_soluong*tbl_cartinf.cart_price 
        WHERE tbl_cartinf.cart_id='".$cart_id."' and tbl_cartmain.order_id='".$order_id."'" ;
        $sql3="UPDATE tbl_cartinf,tbl_cartmain SET tbl_cartmain.Total=(SELECT SUM(tbl_cartinf.cart_total)from tbl_cartinf 
        WHERE tbl_cartinf.order_id ='".$order_id."' )WHERE tbl_cartinf.cart_id='".$cart_id."' and tbl_cartmain.order_id='".$order_id."'"; 
        mysqli_query($connect,$sql1);
        mysqli_query($connect,$sql2);
        mysqli_query($connect,$sql3); 
        //$result = mysqli_query($connect, $update) or trigger_error("Query Failed! SQL: $update - Error: ".mysqli_error($connect), E_USER_ERROR);
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
                    <label for="fname">Mã Giỏ Hàng</label>
                    <input type="text" id="fname" name="cart_id" readonly require value="<?php echo $row['cart_id']; ?>">

                    <label for="fname">Tên Người Dùng</label>
                    <input type="text" id="fname" name="order_name" required value="<?php echo $row['order_name']; ?>">
                    
                    <label for="fname">Tỉnh/Thành phố</label>
                    <input type="text" id="fname" name="order_address"  require value="<?php echo $row['order_address']; ?>">
                    <label for="fname">Quận/Huyện</label>
                    <input type="text" id="fname" name="order_address2"  require value="<?php echo $row['order_address2']; ?>">
                    <label for="fname">Phường Xã</label>
                    <input type="text" id="fname" name="order_address3" " require value="<?php echo $row['order_address3']; ?>">
                    <label for="fname">Số Nhà/Tên Đường</label>
                    <input type="text" id="fname" name="order_address4"  require value="<?php echo $row['order_address4']; ?>">
                    
                    <label for="fname">Số Điện Thoại</label>
                    <input type="text" id="fname" name="order_phone"  require value="<?php echo $row['order_phone']; ?>">    
                    
                    <label for="fname">Tên Sản Phẩm</label>
                    <input type="text" id="fname" name="pro_name" readonly require value="<?php echo $row['pro_name']; ?>">

                    <label for="fname">Số Lượng</label>
                    <input type="text" id="fname" name="cart_soluong" required value="<?php echo $row['cart_soluong']; ?>">

                    <label for="fname">Đơn Giá</label>
                    <input type="text" id="fname" name="cart_price" readonly required value="<?php echo $row['cart_price']; ?>">

                    <label for="fname">Ghi chú</label>
                    <input type="text" id="fname" name="order_note" required value="<?php echo $row['order_note']; ?>">


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