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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./js/lightslider.js"></script>
    <script>
        $(document).ready(function () {
            $("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>
</head>
<body>
    <!-- <?php 
    session_start();
    ?>
    <header>
        <div class="header-left">
            <a href="index.php"><img src="./img/Logo-White-e1543120531648.png" alt=""></a>
            <div class="sp">
                <div class="dropdown">
                    <a href="./product-category.php" style="text-decoration: none; color: whitesmoke;">Đàn Guitar</a>
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
        </div> -->
        <?php
    require('./db.php');
    require('./cate.php');
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
            <!-- Account or Logout -->
            
            <div class="header-right_item">
                <a href="./register.php" style="text-decoration: none; color: white; font-size: 16px">
                    <button>
                    <?php
                        if(empty($_SESSION['current_user'])){
                            ?>
                            Đăng kí / Đăng nhập
                            <a style="text-decoration: none; font-size: 18px; color: whitesmoke;" href="../login.php" ></a> 
                            <?php } else {
                         $currentUser = $_SESSION['current_user'];
                        
                        ?>
                        <a style="text-decoration: none; font-size: 18px; color: whitesmoke;" href="logout.php">Xin chào <?= $currentUser['user_name'] ?></a>
                        
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
    <div class="slider1">
        <!-- fade css -->
        <div class="myslide fade">
            <div class="txt">
                <h1>
                    MUA ĐÀN GUITAR TRỰC TUYẾN, <br> UY TÍN, TIỆN LỢI <br>
                    <button>HƯỚNG DẪN CHỌN ĐÀN GUITAR</button>
                    <a href="./product-category.php">

                        <button>MUA ĐÀN GUITAR</button>
                    </a>
                </h1>
            </div>
            <img src="./img/guitar-station-inside.jpg" style="width: 100%; filter: opacity(70%);">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1>ĐÀN KALIMBA XINH XẮN GIÁ RẺ VÀ CỰC KỲ <br> DỄ CHƠI <br> Giá chỉ từ 390,000đ <br>
                <a href="./Error404.php"><button>MUA NGAY</button></a>
                 </h1>

            </div>
            <img src="./img/kalimba.jpg" style="width: 100%; filter: opacity(70%);">
        </div>

        <!-- /fade css -->

        <!-- onclick js -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="dotsbox" style="text-align:center">
            <span class="dot1" onclick="currentSlide(1)"></span>
            <span class="dot1" onclick="currentSlide(2)"></span>
        </div>
        <!-- /onclick js -->
    </div>

    <!-- =================== END SECTION 2 ===================== -->

    <!-- ===================== SECTION 2 ================== -->

    <section class="section2">
        <div class="container" id=container>
            <div class="top-body">
                <div class="top-body_item">
                    <div class="item-icon">
                        <button><i class="fas fa-truck"></i></button>
                    </div>
                    <div class="item-content">
                        <span>Miễn phí vận chuyển toàn quốc cho đơn hàng phụ kiện từ 299,000đ</span>
                    </div>
                </div>
                <div class="top-body_item">
                    <div class="item-icon">
                        <button><i class="fas fa-gift"></i></button>
                    </div>
                    <div class="item-content">
                        <span>Tặng bộ phụ kiện hấp dẫn khi mua đàn guitar, bảo trì trọn đời</span>
                    </div>
                </div>
                <div class="top-body_item">
                    <div class="item-icon">
                        <button><i class="fas fa-money-check-alt"></i></button>
                    </div>
                    <div class="item-content">
                        <span>Đặt hàng online nhanh chóng, tiện lợi, thanh toán sau khi nhận hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =================== END SECTION 2 ===================== -->

    <!-- ====================== SECTION 3 ====================== -->

    <section class="section3">
        <div class="container" id=container>
            <div class="top-content">
                <div class="content-line_left" id="line" style="width: 428px;">

                </div>
                <div class="content-mid">
                    <div class="title">
                        <i class="fas fa-star"></i> <span>TOP SẢN PHẨM BÁN CHẠY</span>
                    </div>
                </div>
                <div class="content-line_right" id="line" style="width: 428px;">

                </div>
            </div>
            <div class="item">
                <ul id="content-slider" class="content-slider">
                    <li>
                        <div class="slide-item">
                            <a style="text-decoration: none; color: black;" href="./product.php?cate_id=1&pro_id=1">
                            <img src="./img/topSP/HD-119-TOP-Copy-2-300x300.jpg" alt=""> <br>
                            <span>Guitar Acoustic Station HD-119</span> <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <br>
                            <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                            </a>
                            
                        </div>
                    </li>
                    <li>
                        <div class="slide-item">
                            <a href="./Error404.php"  style="text-decoration: none; color: black;">
                            <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                            <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <br>
                            <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="slide-item">
                        <a href="./Error404.php"  style="text-decoration: none; color: black;">
                        <img src="./img/topSP/capo-classic-musedo-mc-4-300x300.jpg" alt=""> <br>
                            <span>Capo Đàn Guitar Classic & Acoustic Musedo MC-4</span> <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <br>
                            <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                    </a>
                            
                        </div>
                    </li>
                    <li>
                        <div class="slide-item">
                        <a href="./Error404.php"  style="text-decoration: none; color: black;"> 
                        <img src="./img/topSP/capo-dan-guitar-acoustic-musedo-mc-1-2-300x300.jpg" alt=""> <br>
                            <span>Capo Musedo – MC1</span> <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <br>
                            <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                    </a>
                           
                        </div>
                    </li>
                    <li>
                        <div class="slide-item">
                        <a href="./Error404.php"  style="text-decoration: none; color: black;"> 
                        <img src="./img/topSP/aw-436-300x300.jpg" alt=""> <br>
                            <span>Dây Acoustic Alice Aw436</span> <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <br>
                            <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                    </a>
                         
                        </div>
                    </li>
                    <li>
                        <div class="slide-item">
                        <a href="./Error404.php"  style="text-decoration: none; color: black;"> 
                        <img src="./img/topSP/chan-dan-chu-a-5-238x300.jpg" alt=""> <br>
                            <span>Dây Acoustic Alice Aw436</span> <br>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span> <br>
                            <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                    </a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- =================== END SECTION 3 ===================== -->

    <!-- ======================== SECTION 4 ====================== -->

    <section class="section4">
        <div class="container" id=container>
            <div class="top-content">
                <div class="content-line_left" id="line" style="width: 479px;">
                </div>
                <div class="content-mid">
                    <div id="title">
                        <i class="fas fa-gifts"></i> <span>SALE HẤP DẪN</span>
                    </div>
                </div>
                <div class="content-line_right" id="line" style="width: 479px;">

                </div>
            </div>
            <ul id="autoWidth" class="cs-hidden">
                <li class="item-a">
                    <div class="slide-item">
                    <a href="./Error404.php"  style="text-decoration: none; color: black;">
                    <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                        <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                        <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                </a>
                        
                    </div>
                </li>
                <li class="item-b">
                    <div class="slide-item">
                    <a href="./Error404.php"  style="text-decoration: none; color: black;">
                    <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                        <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                        <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>    
                </a>
                        
                    </div>
                </li>
                <li class="item-c">
                    <div class="slide-item">
                    <a href="./Error404.php"  style="text-decoration: none; color: black;"> 
                    <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                        <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                        <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                </a>
                        
                    </div>
                </li>
                <li class="item-d">
                    <div class="slide-item">
                    <a href="./Error404.php"  style="text-decoration: none; color: black;">
                    <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                        <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                        <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                </a>
                        
                    </div>
                </li>
                <li class="item-e">
                    <div class="slide-item">
                    <a href="./Error404.php"  style="text-decoration: none; color: black;"> 
                    <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                        <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                        <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                </a>
                        
                    </div>
                </li>
                <li class="item-f">
                    <div class="slide-item">
                    <a href="./Error404.php"  style="text-decoration: none; color: black;">
                    <img src="./img/topSP/day-deo-guitar-tho-cam-8-300x300.png" alt=""> <br>
                        <span>Dây Đeo Guitar & Ukulele Độc Đáo</span> <br>
                        <span class="oldCost">70,000đ</span> <span class="newCost">50,000đ</span>
                </a>
                       
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </section>

    <!-- =================== END SECTION 4 =================== -->

    <!-- ====================== SECTION 5 ===================== -->

    <section class="section5">
        <div class="container" id=container>
            <div class="top-content">
                <div class="content-line_left" id="line" style="width: 479px;">

                </div>
                <div class="content-mid">
                    <div class="title">
                        <i class="fas fa-check"></i><span>TOP DANH MỤC</span>
                    </div>
                </div>
                <div class="content-line_right" id="line" style="width: 479px;">

                </div>
            </div>
            <div class="bot-content">
                <div class="bot-content_item">
                    <img src="./img/danhMuc/phuKien.jpg" alt="">
                    <a href="./Error404.php">
                        PHỤ KIỆN GUITAR
                        <p class="info">45 sản phẩm</p>
                    </a>
                </div>
                <div class="bot-content_item">
                    <img src="./img/danhMuc/dan_guitar_cc300_6-360x360.jpg" alt="">
                    <a href="./Error404.php">
                        ĐÀN GUITAR
                        <p class="info">30 sản phẩm</p>
                    </a>
                </div>
                <div class="bot-content_item">
                    <img src="./img/danhMuc/kalimba.png" alt="">
                    <a href="./Error404.php">
                        ĐÀN KALIMBA
                        <p class="info">15 sản phẩm</p>
                    </a>
                </div>
                <div class="bot-content_item">
                    <img src="./img/danhMuc/day-deo-ukulele-1-360x360.png" alt="">
                    <a href="./Error404.php">
                        ĐÀN UKELELE
                        <p class="info">28 sản phẩm</p>
                    </a>
                </div>
                <div class="bot-content_item">
                    <img src="./img/danhMuc/huong-dan-mua-ukulele-5-360x360.png" alt="">
                    <a href="./Error404.php">
                        HOT COMBO
                        <p class="info">13 sản phẩm</p>
                    </a>
                </div>
            </div>
            <div class="readMore">
                <button>VIEW MORE</button>
            </div>
        </div>
    </section>

    <!-- =================== END SECTION 5 =================== -->

    <!-- ====================== SECTION 6 ===================== -->

    <section class="section6">
        <div class="container" id=container>
            <div class="top-content">
                <div class="content-line_left" id="line" style="width: 461px;">

                </div>
                <div class="content-mid">
                    <div class="title">
                        <span>HƯỚNG DẪN CHƠI ĐÀN</span>
                    </div>

                </div>
                <div class="content-line_right" id="line" style="width: 461px;">

                </div>
            </div>
            <div class="bot-content">
                <div class="bot-content_item">
                    <div class="box-image">
                        <img src="./img/huongDan/tuning-guitar-to-CGCGCE-225x150.jpg" alt="">
                    </div>
                    <div class="box-content">
                        <div class="stu">
                            HỌC ĐÀN GUITAR CƠ BẢN
                        </div>
                        <a href="">
                            <div class="big-title">
                                3 CÁCH CHỈNH DÂY ĐÀN CHO NGƯỜI MỚI TẬP
                            </div>
                            <div class="underLine"></div>
                            <p class="info">
                                Chỉnh dây đàn guitar như thế nào cho chuẩn, bạn hoàn toàn có thể lên[...]
                            </p>
                            <p class="cmt">
                                30 comments
                            </p>
                        </a>
                    </div>
                </div>
                <div class="bot-content_item">
                    <div class="box-image">
                        <img src="./img/huongDan/meo-hoc-hop-am-guitar-500x282.jpg" alt="">
                    </div>
                    <div class="box-content">
                        <div class="stu">
                            HỌC ĐÀN GUITAR CƠ BẢN
                        </div>
                        <a href="">
                            <div class="big-title">
                                3 MẸO ĐƠN GIẢN KHIẾN BẠN HỌC HỢP ÂM GUITAR NHANH TIẾN BỘ
                            </div>
                            <div class="underLine"></div>
                            <p class="info">
                                Khi nói đến chơi đàn guitar acoustic thì có rất, rất nhiều người bị gặp[...]
                            </p>
                            <p class="cmt1">
                                62 comments
                            </p>
                        </a>
                    </div>
                </div>
                <div class="bot-content_item">
                    <div class="box-image">
                        <img src="./img/huongDan/huong-dan-cach-lua-chon-dan-guitar-acoustic-4-225x150.jpg" alt="">
                    </div>
                    <div class="box-content">
                        <div class="stu">
                            KIẾN THỨC CHỌN ĐÀN GUITAR
                        </div>

                        <a href="">
                            <div class="big-title">
                                HƯỚNG DẪN CÁCH CHỌN MỘT CÂY ĐÀN ACOUSTIC TỐT
                            </div>
                            <div class="underLine"></div>
                            <p class="info">
                                Hồi xửa hồi xưa, khi mình mới tập chơi đàn cũng chỉ biết một số[...]
                            </p>
                            <p class="cmt1">
                                5 comments
                            </p>
                        </a>
                    </div>
                </div>
                <div class="bot-content_item">
                    <div class="box-image">
                        <img src="./img/huongDan/Best-Acoustic-Guitar-1024x677-227x150.jpg" alt="">
                    </div>
                    <div class="box-content">
                        <div class="stu">
                            KIẾN THỨC CHỌN ĐÀN GUITAR
                        </div>

                        <a href="">
                            <div class="big-title">
                                HƯỚNG DẪN CÁCH CHỌN MỘT CÂY ĐÀN ACOUSTIC TỐT
                            </div>
                            <div class="underLine"></div>
                            <p class="info">
                                Nếu bạn là người mới tập chơi đàn guitar và đang cần tư vấn cách chọn[...]
                            </p>
                            <p class="cmt1">
                                5 comments
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="readMore">
                <button>READ MORE</button>
            </div>
        </div>
    </section>
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
                                <a href="https://www.facebook.com/guitarstation.vn/"><button><i class="fab fa-facebook-f"></i></button></a>
                                
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
    <script src="./js/formLogin.js"></script>
    <script>
        window.addEventListener("scroll", function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>

</html>