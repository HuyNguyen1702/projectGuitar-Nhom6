<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/styleError404.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    
    <script>
        setTimeout(function(){
            window.location.href='index.php';
        },5500);
    </script>
</head>

<body>
    <?php
    session_start();
    ?>
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

    <div class="conTaiNer">
        <div class="bigNumber">
            <p>404</p>
        </div>
        <div class="smallTitle">
            <p>OOPS! SOMETHING IS WRONG</p>
        </div>
        <div class="descrip">
            <br>
            Chức năng hiện tại đang được chúng tôi bảo trì. Bạn hãy quay lại sau <span id="count">5</span><br>
            <a href="./index.php"> Trở lại trang web </a>
        </div>
        <div class="social">
            <a href=""> <i class="fab fa-facebook-f"></i> </a>
            <a href=""> <i class="fas fa-envelope"></i></a>
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
    <script src="countdown.js"></script>
</body>
</html>