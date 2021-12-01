<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/report.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <script>
        function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>
</head>

<body>
    <?php
    session_start();
    include('./db.php');
    include('./cate.php');
    $currentUser = $_SESSION['current_user'];
    $user_id=$currentUser['user_id'];
    ?>
    <header class="header">
        <div class="header-left">
            <a href="index.php"><img src="././img/Logo-White-e1543120531648.png" alt=""></a>
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
                <div class="dropdown">
                    Nhạc Cụ Khác
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate2)) : ?>
                            <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Phụ Kiện Guitar
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate3)) : ?>
                            <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Tự Học Guitar
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate4)) : ?>
                            <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Hỗ Trợ Khách Hàng
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <?php while ($row = mysqli_fetch_array($cate5)) : ?>
                            <a href='#'><?php echo $row['cate_name'] ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-right">
            <!-- Account or Logout -->

            <div class="header-right_item">
                <a href="./register.php" style="text-decoration: none; color: white; font-size: 16px">
                    <button>

                        <?php
                        if (empty($_SESSION['current_user'])) {
                        ?>
                            Đăng kí / Đăng nhập
                            <a href="../login.php"></a>
                        <?php } else {
                            $currentUser = $_SESSION['current_user'];
                        ?>
                            <a href="logout.php" style="text-decoration: none; font-size: 18px; color: whitesmoke">Xin chào <?= $currentUser['user_name'] ?></a>
                        <?php
                        }
                        ?>
                    </button>
                </a>
            </div>
            <div class="header-right_item">
                <a href="./cart.php" style="color: whitesmoke;"> <i class="fas fa-shopping-bag"></i> </a>
            </div>
            <div class="header-right_item" onclick="openNav()">
                <i class="fas fa-search"></i>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <input type="text" placeholder="Tìm kiếm..." id="id_text" style="outline: none;">
                    <button type="submit"><i class="fas fa-search" style="color: whitesmoke;"></i></button>
                </div>
            </div>

        </div>
    </header>
    <?php
            //sql1 lay thong tin khach
            $sql1 = "SELECT tbl_cartmain.order_id,tbl_cartmain.order_name,tbl_cartmain.order_phone,tbl_cartmain.order_address,tbl_cartmain.order_address2,tbl_cartmain.order_address3,tbl_cartmain.order_address4,tbl_cartmain.order_note FROM tbl_cartmain WHERE tbl_cartmain.user_id='".$user_id."' ORDER BY `order_id` DESC LIMIT 1";
            $query1= mysqli_query($connect,$sql1);
            while($row1 = mysqli_fetch_array($query1)) : ?> 
    <div class="conTaiNer" id="div_print">
        <div class="wrapper">
            <div class="top-title">
                <div class="nameAndInforShop">
                    <div class="left-top_title">
                        <span>GUITAR STATION</span>
                    </div>
                    <div class="phonenumber" style="font-size: 18px;">
                        <span class="bold">Số điện thoại: </span>
                        <span>098374323</span>
                    </div>
                </div>
                <div class="right-top_title">
                    <span>
                        Hóa Đơn
                    </span>
                </div>
            </div>
            <div class="mid-title">
                <div class="date">
                    <span class="bold">Ngày: </span>
                    <span id="hvn"></span>
                </div>
                <div class="no-receipt">
                    <span class="bold">Mã hóa đơn: </span>
                    <span><?php echo $row1['order_id']?></span>
                </div>
            </div>
            <div class="bot-title">
                <div class="infor-user">
                    <div class="name">
                        <span class="bold">Tên khách hàng: </span>
                        <span><?php echo $row1['order_name']?></span>
                    </div>
                    <div class="phonenumber">
                        <span class="bold">Số điện thoại: </span>
                        <span><?php echo $row1['order_phone']?></span>
                    </div>
                    <div class="address">
                        <span class="bold">Địa chỉ: </span>
                        <span><?php echo $row1['order_address4']?>, <?php echo $row1['order_address3']?>,<?php echo $row1['order_address2']?>,<?php echo $row1['order_address']?></span>
                    </div>
                    <div class="note">
                        <span class="bold">Ghi chú: </span>
                        <span><?php echo $row1['order_note']?></span>
                    </div>
                </div>
            </div>
            <?php
                endwhile; 
            ?>
            <div class="receipt">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                    $sql2 = "SELECT tbl_product.pro_name,tbl_cartinf.cart_soluong,tbl_cartinf.cart_price,tbl_cartinf.cart_total FROM tbl_cartinf,tbl_product WHERE tbl_cartinf.order_id=(SELECT tbl_cartmain.order_id from tbl_cartmain WHERE tbl_cartmain.user_id='".$user_id."' ORDER BY `order_id` DESC LIMIT 1) and tbl_cartinf.pro_id=tbl_product.pro_id";
                    $query2= mysqli_query($connect,$sql2);
                    while($row2 = mysqli_fetch_array($query2)) : ?> 
                    <tr>
                        <td><?php echo $row2['pro_name']?></td>
                        <td><?php echo $row2['cart_soluong']?></td>
                        <td><?php echo number_format($row2['cart_price'],0,".",",")?></td>
                        <td><?php echo number_format($row2['cart_total'],0,".",",")?></td>
                    </tr>
                    <?php
                        endwhile;
                    ?>
                </table>
            </div>
            
            <?php 
                $total = " SELECT tbl_cartmain.Total FROM tbl_cartmain WHERE tbl_cartmain.user_id='".$user_id."' ORDER BY `order_id` DESC LIMIT 1";
                $querytotal= mysqli_query($connect,$total);
                while($row1 = mysqli_fetch_array($querytotal)) : ?>
            <div class="sub-total">
                <span class="bold">Tổng thành tiền: </span>
                <span> <?php echo  number_format($row1['Total'],0,".",",")?></span>
            </div>
            <?php
                endwhile; 
            ?>
        </div>
        
        <div class="returnShop" style="display: flex; justify-content: space-between;">
            <button>
                <a href="./index.php">
                    <i class="fas fa-long-arrow-alt-left"></i>
                    TRỞ LẠI
                </a>
            </button>
            <button name="b_print" class="ipt" onClick="printdiv('div_print');" value=" Print ">
                <a href="#">
                    IN HÓA ĐƠN
                </a>
            </button>
        </div>
        
    </div>
    
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
    <script src="./js/date.js">
    </script>
</body>

</html>