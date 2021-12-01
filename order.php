<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Mua Đàn Guitar Trực Tuyến Giá Tốt
    </title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/formLogin.css">
    <link rel="stylesheet" href="./css/newProduct1.css">
    <link rel="stylesheet" href="./css/product-category.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/order.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./js/lightslider.js"></script>
</head>

<body>
    <?php 
    session_start();
    require('./db.php'); 
    include('cate.php');
    ?>
    <?php 
     if(empty($_SESSION['current_user'])){
        $message = "Chưa đăng nhập";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: ./register.php');
        } else {
        $currentUser = $_SESSION['current_user'];
        $user_id=$currentUser['user_id'];
    ?>
    <?php 
        require('./db.php');
        //session_start();
        $_SESSION["order"]=array();
        if(isset($_GET['action']))
        {
            switch($_GET['action'])
            {
                case"order": 
                    $products = mysqli_query($connect,"SELECT * FROM `tbl_product` WHERE `pro_id` IN (".implode(",",array_keys($_SESSION["cart"])).")");
                    $total=0;
                    $orderProduct = array();
                    while ($row = mysqli_fetch_array($products))
                    {
                        $orderProduct[] = $row;
                        $total += $row['pro_price']* $_SESSION["cart"][$row['pro_id']];
                        
                    }
                    $insert =  mysqli_query($connect,"INSERT INTO `tbl_cartmain` (`order_id`,`user_id`, `order_name`, `order_address`, `order_address2`, `order_address3`, `order_address4`, `order_phone`, `order_email`, `order_note`, `Total`)
                     VALUES (NULL, '".$user_id."','".$_POST['name']."', '".$_POST['add1']."', '".$_POST['add2']."', '".$_POST['add3']."', '".$_POST['add4']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['note']."', '".$total."');");
                    $orderID=$connect->insert_id;
                    $insertString="";
                    foreach($orderProduct as $key => $product)
                    {
                        $insertString .= "(NULL, '".$orderID."','".$user_id."', '".$product['pro_id']."', '".$_SESSION["cart"][$product['pro_id']]."', '".$product['pro_price']."','".$_SESSION["cart"][$product['pro_id']]*$product['pro_price']."')";
                        if($key!=count($orderProduct)-1)
                        {
                            $insertString .= ",";
                        }
                    }
                    $insert =  mysqli_query($connect,"INSERT INTO `tbl_cartinf` (`cart_id`, `order_id`, `user_id`,`pro_id`, `cart_soluong`, `cart_price`,`cart_total`) VALUES ".$insertString.";");
                    //$test = mysqli_query($connect,"SELECT tbl_cartmain.order_id FROM tbl_cartmain ORDER BY order_id DESC LIMIT 1");
                    header('location:cart_report.php');
                    break;
            }
        }
    ?>
        <header>
        <div class="header-left">
        <a href="index.php"><img src="./img/Logo-White-e1543120531648.png" alt=""></a>
            <div class="sp">
                <div class="dropdown">
                    <a href="./product-category.php" style="text-decoration: none; color: whitesmoke;">Đàn Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate1)) : ?>
                            <a href='./product-category.php?=<?= $row['cate_id'] ?>'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown" >
                    <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;"> Nhạc Cụ Khác</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate2)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;">Phụ Kiện Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate3)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;">Tự học Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate4)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                <a href="./Error404.php" style="text-decoration: none; color: whitesmoke;">Hỗ Trợ Khách Hàng</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate5)) : ?>
                            <a href='./Error404.php'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-right">
            <div class="header-right_item">
            <a href="./register.php">
                    <button>
                    <?php
                        if(empty($_SESSION['current_user'])){
                            ?>
                            Đăng kí / Đăng nhập
                            <a href="../login.php">Tai day</a> 
                            <?php } else {
                         $currentUser = $_SESSION['current_user'];
                        
                        ?>
                        <a href="logout.php">Xin chào <?= $currentUser['user_name'] ?></a>
                        
                        <?php
                        }
                        ?>
                    </button>
                </a>
            </div>
        </div>
    </header>

    <!-- ================ MAIN ================== -->
    <div class="container">
        <form id="inf-form" action ="order.php?action=order" method="POST">
        <div class="order-big_wrap">
            <div class="order-small_wrap">
                <div class="address">
                    <h3 style="text-align: center;">THANH TOÁN</h3>
                    <h1 style="text-align: center;">ĐỊA CHỈ NHẬN HÀNG</h1>
                    <div class="address-item">
                        <div class="add-item_lable">
                            <label for="psw"><b>Tỉnh/Thành phố *</b></label>
                        </div>
                        <div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Tỉnh/thành phố" name="add1" required>
                        </div>
                        </div>
                    </div>

                    <div class="address-item">
                        <div class="add-item_lable">
                            <label for="psw"><b>Quận/Huyện *</b></label>
                        </div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Quận/Huyện" name="add2" required>
                        </div>
                    </div>
                    <div class="address-item">
                        <div class="add-item_lable">
                            <label for="psw"><b>Phường/Xã *</b></label>
                        </div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Phường/Xã" name="add3" required>
                        </div>
                    </div>

                    <div class="address-item">
                        <div class="add-item_lable">
                            <label for="psw"><b>Tên người nhận *</b></label>
                        </div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Tên người nhận" name="name" required>
                        </div>
                    </div>

                    <div class="address-item">
                        <div class="add-item_lable">
                            <label for="psw"><b>Số điện thoại nhận hàng *</b></label>
                        </div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Số điện thoại" max="11" name="phone" required>
                        </div>
                    </div>

                    <div class="address-item">
                        <div class="add-item_lable">
                            <label ><b>Số nhà/tên đường *</b></label>
                        </div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Số nhà/tên đường" name="add4" required>
                        </div>
                    </div>

                    <div class="address-item">
                        <div class="add-item_lable">
                            <label for="email"><b>Email (tùy chọn)</b></label>
                        </div>
                        <div class="add-item_sel">
                            <input type="text" placeholder="Enter Email" name="email" required>
                        </div>
                    </div>

                    <h1 style="text-align: center;">CÁC THÔNG TIN KHÁC</h1>

                    <div class="address-item " style="display: flex;  align-items: flex-start;">
                        <div class="add-item_lable">
                            <label ><b>Ghi chú khi giao hàng (tùy chọn)</b></label>
                        </div>
                        <div class="add-item_sel">
                            <textarea name="note" id="" placeholder="Ghi chú của bạn dành cho nhân viên giao hàng" style="width: 400px; height: 100px;"> </textarea>
                        </div>
                    </div>
                </div>
                <?php 
                    $test = mysqli_query($connect,"SELECT tbl_cartmain.order_id FROM tbl_cartmain ORDER BY order_id DESC LIMIT 1");
                    while($row = mysqli_fetch_array($test)) :
                ?>
                <div class="nextStep">
                    <!--  <a href="cart_report.php"><button type="submit" name="finish" value="Hoàn Tất"></button> </a> -->
                    <!-- <a type="submit" href="cart_report.php">Hoàn Tất</a> -->
                    <input type="submit" name="finish" value="Hoàn Tất"> </input>
                </div>
                <?php
                    endwhile; 
                ?>
            </div>
        </div>
        </form>
    </div>

    <!-- ============= END MAIN =================  -->

    <footer>
        <div class="container">
            <div class="footer-item">
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Hỗ trợ khách hàng</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <a href="">Hướng dẫn đặt hàng trực tuyến</a> <br>
                        <a href="">FAQ - Câu hỏi thường gặp</a> <br>
                        <a href="">Hướng dẫn mua đàn guitar cho người <br> mới tập</a>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <a href="">Đàn Guitar Acoustic</a> <br>
                        <a href="">Đàn Guitar Epiphone DR-100</a> <br>
                        <a href="">Capo Guitar Giá Rẻ</a> <br>
                        <a href="">Dây Đàn Guitar</a>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Kết nối với guitar station</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <div class="tooltip">
                            <div class="fb">
                                <button><i class="fab fa-facebook-f"></i></button>
                            </div>
                            <span class="tooltiptext">Theo dõi Guitar Station trên Facebook</span>
                        </div>
                        <div class="tooltip">
                            <div class="mail">
                                <button><i class="far fa-envelope"></i></button>
                            </div>
                            <span class="tooltiptext1">Gửi Email cho chúng tôi</span>
                        </div>
                    </div>
                </div>
                <div class="footer-item_small">
                    <div class="item-small_title">
                        <span>Địa chỉ liên hệ</span>
                    </div>
                    <div class="underLineFooter"></div>
                    <div class="item-small_cnt">
                        <p>75Đ Mai Lão Bạng, phường 13, quận <br> Tân Bình, TP.HCM.</p>
                        <p>Làm việc kể cả Thứ 7 - Chủ Nhật</p>
                        <p>Hotline: 093 471 0592</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/index.js"></script>
    <script src="./js/product.js"></script>
    <script src="./js/formLogin.js"></script>
    <script>
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
        <?php
        }
    ?>
</body>

</html>