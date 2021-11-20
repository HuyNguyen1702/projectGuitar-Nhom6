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
    <link rel="stylesheet" href="./css/product.css">
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
    ?>
    <?php 
     if(empty($_SESSION['current_user'])){
        $message = "Chưa đăng nhập";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: ./register.php');
        } else {
        $currentUser = $_SESSION['current_user'];
    ?>
    <?php 
         
        require('./db.php');
        //session_start();
        if(isset($_GET['action']))
        {
            switch($_GET['action'])
            {
                case"submit":
                    
            }
        }
    ?>
        <header>
        <div class="header-left">
            <a href="index.php"><img src="./img/Logo-White-e1543120531648.png" alt=""></a>
            <div class="sp">
                <div class="dropdown">
                    <a href="./product-category.html" style="text-decoration: none; color: whitesmoke;">Đàn Guitar</a>
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <a href="#">Đàn Guitar Acoustic</a>
                        <a href="#">Đàn Guitar Nước Ngoài</a>
                        <a href="#">Đàn Guitar Classic</a>
                        <a href="#">Đàn Guitar Có EQ</a>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Nhạc Cụ Khác
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <a href="#">Đàn Ukulele</a>
                        <a href="#">Đàn Kalimba</a>
                        <a href="#">Kèn Harmonica</a>
                        <a href="#">Rollup Piano</a>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Phụ Kiện Guitar
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <a href="#">Capo Guitar</a>
                        <a href="#">Dây Đàn Guitar</a>
                        <a href="#">Trang Sức Guitar</a>
                        <a href="#">Dụng Cụ Trang Trí Guitar</a>
                        <a href="#">Khóa Đàn Guitar</a>
                        <a href="#">Guitar Pickups, Equalizer (EQ)</a>
                        <a href="#">Phím Gảy Guitar (Pick/Pickholder)</a>
                        <a href="#">Dây Đeo Guitar / Ukulele</a>
                        <a href="#">Phụ Kiện Dành Cho Người Mới Tập</a>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Tự Học Guitar
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <a href="#">Học Đàn Guitar Cơ Bản</a>
                        <a href="#">Học Đàn Guitar Nâng Cao </a>
                        <a href="#">Hợp Âm Guitar</a>
                        <a href="#">Học Đàn Ukelele</a>
                    </div>
                </div>
            </div>
            <div class="sp">
                <div class="dropdown">
                    Hỗ Trợ Khách Hàng
                    <i class="fas fa-chevron-down"></i>
                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                        <a href="#">Hướng Dẫn Mua Đàn Guitar <br> Cho Người Mới Tập Chơi</a>
                        <a href="#">Hướng Dẫn Đặt Hàng Online</a>
                        <a href="#">Câu Hỏi Thường Gặp</a>
                        <a href="#">Hướng Dẫn Mua Đàn Ukulele <br> Cho Người Mới Tập Chơi</a>
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
                            <textarea name="" id="" placeholder="Ghi chú của bạn dành cho nhân viên giao hàng" style="width: 400px; height: 100px;"> </textarea>
                        </div>
                    </div>
                </div>
                <div class="nextStep">
                    <input type="submit" name="finish" value="Hoàn tất"> </input>
                </div>
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