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
    <header>
        <?php 
            session_start();
            require('./db.php');
            require('./cate.php');
        ?>
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

    <!-- ============== MAIN =============== -->
    <?php 
                $ifpro = mysqli_query($connect,"SELECT * FROM `tbl_product` WHERE `pro_id` = ".$_GET['pro_id']);
                $product= mysqli_fetch_assoc($ifpro);
                $cate_pro = mysqli_query($connect,"SELECT * FROM `qlchguitar`.`tbl_category` WHERE `cate_id` = ".$_GET['cate_id']);
                $cate=mysqli_fetch_assoc($cate_pro);
                
    ?>
    <div class="product">
        <div class="thumb" style="padding-bottom: 10px; font-size: 14px; ">
            <ul class="breadcrumb" style="background-color: white;">
                <li><a href="index.php">Trang chủ</a> </li>
                <li><a href="product-category.php">Đàn Guitar</a></li>
                <li><a href=""><?= $cate['cate_name']?></a></li>
            </ul>
        </div>
        <div class="container">
            <div class="top" style="display: flex; justify-content: space-around; ">
                <div class="cover" style="width: 200px"></div>
                <div class="product-right">
                    <div class="product-right_top" style="text-align: center; margin-left: 150px;">
                        <p style="font-size: 24px; font-weight: 600"><?=$product['pro_name']?></p>
                        <p style="font-size: 20px; font-weight: 600; color: orange;"><?=$product['pro_price']?>đ</p>
                        <button class="front active" onclick="showFront()">MẶT TRƯỚC</button>
                        <button class="back active" onclick="showBack()">MẶT SAU</button>
                    </div>
                </div>
            </div>
            <div class="img-product">
                 <img src="./img/moreInfor/<?=$product['pro_img1']?>" alt="" id="imgFront"> 
                 <img src="./img/moreInfor/<?=$product['pro_img2']?>" alt="" id="imgBack" style=display:none>
            </div>

            <p style="position: absolute; top: 77%; left: 31.4%; font-size: 18px;"> <i class="fas fa-gift" style="color: orangered;"></i> Combo Tặng Kèm</p>
            <div class="bot" style="display: flex; justify-content: space-around;">
                <div class="product-left_bot">
                    <div class="left-bot_item">
                        <div class="gift-img">
                            <img src="./img/comboGift/bao-dan-guitar-3-lop-3-300x300.png" alt="">
                        </div>
                        <div class="gift-cnt">
                            <p>Bao Đàn Guitar 3 Lớp</p>
                        </div>
                        <span class="oldCost">70,000đ</span> <span class="newCost">0đ</span>
                    </div>
                    <div class="left-bot_item">
                        <div class="gift-img">
                            <img src="./img/comboGift/so-huong-dan-e1547447490346-300x300.png" alt="">
                        </div>
                        <div class="gift-cnt">
                            <p>Sổ Hướng Dẫn Học Guitar Đệm Hát</p>
                        </div>
                        <span class="oldCost">70,000đ</span> <span class="newCost">0đ</span>
                    </div>
                    <div class="left-bot_item">
                        <div class="gift-img">
                            <img src="./img/comboGift/pick-alice-4.jpg-300x300.jpg" alt="">
                        </div>
                        <div class="gift-cnt">
                            <p>Phím gảy đàn guitar</p>
                        </div>
                        <span class="oldCost">70,000đ</span> <span class="newCost">0đ</span>
                    </div>
                </div>
                <div id="navbar-hide" style="z-index: 1000;">
        <div class="container">
            <div class="navbar-menu actived"
                    style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="link">
                    <a href="#description" class="item ">Mô tả sản phẩm</a>
                    <a href="#specification" class="item ">Thông số kỹ thuật</a>
                    <a href="#comment" class="item ">Khách hàng nhận xét</a>
                </div>
                <div class="link-cart" style="display: flex; align-items: center;">
                    <p style="font-size: 20px; font-weight: 600; color: orange; margin-right: 30px;"><?=$product['pro_price']?>đ</p>
                    <div class="link-cart_button">
                        <button>THÊM VÀO GIỎ HÀNG</button>
                    </div>
                </div>
            </div>
        </div>
            </div>
                <div class="product-right_bot">
                    <?php 
                        if($product['pro_number'] > 0){
                            ?>
                            <div class="addCart">
                            <div class=""><label for="">Tồn kho : </label><?=$product['pro_number']?></div>

                            
                            <form id="add-to-cart-form" action="cart.php?action=add" method="POST" >
                                <div class="addCart-right">
                                    <div class="value">
                                        <input style="text-align: center;" type="text" value="1" name="cart_soluong[<?=$product['pro_id']?>]" size="2"/>
                                    </div>
                                    <div class="add">
                                        <input type="submit" class="" value="Thêm vào giỏ hàng"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <?php
                        }else {
                            ?> 
                            <span>Hết hàng</span>
                        <?php
                        } 
                    ?>
                    <div class="bar"></div>
                    <div class="ship">
                        <button><i class="fas fa-truck fa-flip-horizontal"></i>
                            Tính phí vận chuyển đến địa chỉ của bạn
                        </button>
                        <p> <i class="fas fa-info-circle"></i> Hướng dẫn cách đặt hàng trực tuyến</p>
                        <p> <i class="fas fa-book"></i> Câu hỏi thường gặp khi mua hàng</p>
                    </div>
                    
                </div>
            </div>
            <div class="infor-menu">
                <a href="#description">Mô tả sản phẩm</a>
                <a href="#specification">Thông số kỹ thuật</a>
                <a href="#comment">Khách hàng nhận xét</a>
            </div>
            <!-- ============= DESCRIPTION ================ -->
            <section>
                <div class="description" id="description">
                    <div class="title-desc">
                        <p><?=$product['pro_name']?></p>
                    </div>
                    <div>
                        <?=$product['pro_des']?>;
                    </div>
                    <div class="img-description">
                        <?php 
                         if(!empty($product['pro_img3'])){
                            ?>
                             <img src="./img/moreInfor/<?=$product['pro_img3']?>" alt="" style="width: 762px; height: 1352px;">
                             <?php
                         }
                         if(!empty($product['pro_img4'])){
                            ?>
                             <img src="./img/moreInfor/<?=$product['pro_img4']?>" alt="" style="width: 762px; height: 1352px;">
                             <?php
                         }
                        ?>
                    </div>
                    <!-- <div class="video-demo">
                        <p>Video Demo Thực Tế</p>
                        <iframe src="https://www.youtube.com/embed/i5pfz87Cpu4" allowfullscreen frameborder="0"
                            style="width: 900px; height: 500px"></iframe>
                    </div> -->
                </div>
            </section>

            <!-- ============= SPECIFICATION ================ -->

            <section>
                <div class="specification" id="specification">
                    <div class="title-desc">
                        <p>Thông số kĩ thuật</p>
                    </div>
                    <p style="text-align: center; font-size: 18px;">
                        Với chất liệu 100% làm từ gỗ chất lượng, những cây đàn tại Guitar Station đảm bảo mang lại cho
                        bạn trải nghiệm chơi đàn tốt nhất.
                    </p>
                    <div class="table">
                        <div class="table1">
                            <div class="item-table">
                                <div class="item-table_title">
                                    Xuất xứ
                                </div>
                                <div class="item-table_value">
                                    Việt Nam
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Mặt trước
                                </div>
                                <div class="item-table_value">
                                    Gỗ Thông Sitka
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Cần đàn
                                </div>
                                <div class="item-table_value">
                                    Gỗ Hồng Đào (Mahogany Việt Nam)
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Đầu cần đàn
                                </div>
                                <div class="item-table_value">
                                    Gỗ Hồng Đào (Mahogany Việt Nam)
                                </div>
                            </div>
                        </div>
                        <div class="table2">
                            <div class="item-table">
                                <div class="item-table_title">
                                    Kiểu dáng
                                </div>
                                <div class="item-table_value">
                                    Dáng D, thùng khuyết
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Lưng & hông
                                </div>
                                <div class="item-table_value">
                                    Gỗ Hồng Đào (Mahogany Việt Nam)
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Mặt cần
                                </div>
                                <div class="item-table_value">
                                    Gỗ Ebony
                                </div>
                            </div>
                            <div class="item-table">
                                <div class="item-table_title">
                                    Ti chỉnh cong cần
                                </div>
                                <div class="item-table_value">
                                    Có ti chỉnh cong cần
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- ============= COMMENT ================ -->

            <section>
                <div class="comment" id="comment">
                    <div class="title-desc">
                        <p>Đánh giá sản phẩm</p>
                    </div>
                    <p style="font-size: 20px;">Đánh giá của bạn về sản phẩm</p>
                    <div class="star">
                        <div class="item-star" style="padding-left: 0px!important;">
                            <span>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                        <div class="item-star">
                            <span>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                        </div>
                    </div>
                    <textarea name="" id="" style="width: 100%; height: 170px;"> </textarea>
                    <button type="submit">GỬI</button>
                </div>
            </section>
            <!-- ============= RECOMMENT ============== -->
            <section>
           
                <div class="recomment">
                    <div class="title-desc">
                        <p>Sản phẩm phù hợp với bạn</p>
                    </div>
                    <div class="img-recmt">
                        <div class="img-recmt_item">
                            <img src="./img/product/HD-300-Top-vertical.jpg" alt="">
                            <div class="name-recmt">
                                <p>
                                    Guitar Acoustic Station HD-119
                                </p>
                                <span class="newCost">1,190,000đ</span> <br>
                                <button>XEM THÊM <i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="img-recmt_item">
                            <img src="./img/product/CA60-trước-281x500.jpg" alt="">
                            <div class="name-recmt">
                                <p>
                                    Guitar Acoustic Station CA-80
                                </p>
                                <span class="oldCost">8,000,000đ</span> <span class="newCost">7,500,000đ</span> <br>
                                <button>XEM THÊM <i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="viewMore">
                        <button>Xem Tất Cả Các Sản Phẩm Liên Quan</button>
                    </div>
                </div>
            </section>
        </div>
        
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
</body>

</html>