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
    <link rel="stylesheet" href="./css/product-category.css">
    <link rel="stylesheet" href="./css/page.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
    <div class="product">
        <div class="thumb" style="padding-bottom: 10px; font-size: 14px;">
            <ul class="breadcrumb">
                <li><a href="index.php">Trang chủ</a> </li>
                <li><a href="product-category.php">Đàn Guitar</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="container-small">
                <!-- ============== MENU =============== -->
                <?php
                //$param = $_GET['param'];
                $param = "";
                $orderCondition="";
                $search = isset($_GET['name']) ? $_GET['name'] : "";
                if ($search) {
                    $where = " WHERE `name` like '%" . $search . "%'";
                    $param .= "name=" .$search."&";
                }
                $orderField = isset($_GET['field']) ? $_GET['field'] : "";
                $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
                if(!empty($orderField) && !empty($orderSort))
                {
                    $orderCondition ="ORDER BY `tbl_product`.`".$orderField."` ".$orderSort;
                    $param .= "field=".$orderField."&sort=".$orderSort."&";
                }
                //printf($param);exit;
                $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 6;
                $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($current_page - 1) * $item_per_page;
                if ($search) {
                    $seapro = mysqli_query($connect, "SELECT * FROM `tbl_product` WHERE `pro_name` LIKE'%" . $search ."%' ".$orderCondition." LIMIT " . $item_per_page . " OFFSET " . $offset);
                    $totalRecords = mysqli_query($connect, "SELECT * FROM `tbl_product` WHERE `pro_name` LIKE'%" . $search . "%'");
                } else {
                    $seapro = mysqli_query($connect, "SELECT *FROM `tbl_product` ".$orderCondition." LIMIT " . $item_per_page . " OFFSET " . $offset);
                    $totalRecords = mysqli_query($connect, "SELECT * FROM `tbl_product`");
                }
                $totalRecords = $totalRecords->num_rows;
                $totalPages = ceil($totalRecords / $item_per_page);
                ?>
                <div class="sidenav">
                    <div class="menu_item">
                        <p>TÌM KIẾM</p>
                        <div class="underLineFooter"></div>
                        <form action="" method="get">
                            <div class="search-product">
                                <input name="name" type="text" placeholder="Tìm kiếm..." style="width: 200px; height: 30px;" value="<?= isset($_GET['name']) ? $_GET['name'] : ""; ?>" />
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="menu_item">
                        <p>DANH MỤC SẢN PHẨM</p>
                        <div class="underLineFooter"></div>
                        <button class="dropdown-btn">
                            Phụ Kiện Guitar
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="#">Dụng Cụ Trang Trí Guitar</a>
                            <a href="#">Phím Gảy Guitar (Pick/Pickholder)</a>
                            <a href="#">Guitar Pickups, Equalizer (EQ)</a>
                            <a href="#">Dây Đeo Guitar / Ukulele</a>
                            <a href="#">Capo Guitar</a>
                            <a href="#">Dây Đàn Guitar</a>
                            <a href="#">Dành Cho Người Mới Tập</a>
                            <a href="#">Bao Đàn Guitar/Ukulele</a>
                        </div>
                        <a href="#contact">Đàn Ukulele</a>
                        <a href="#contact">Đàn Kalimba</a>
                        <button class="dropdown-btn">
                            Đàn Guitar
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a href="product-category.php">Đàn Guitar Acoustic</a>
                            <a href="#">Đàn Guitar Classic</a>
                            <a href="#">Đàn Guitar Có EQ</a>
                            <a href="">Đàn Guitar Cao Cấp</a>
                            <a href="">Đàn Guitar Nước Ngoài</a>
                        </div>
                        <a href="#contact">Hot Combo</a>
                        <a href="#contact">Phụ Kiện Khác</a>
                        <a href="#contact">Kèn Harmonica</a>
                    </div>
                    <div class="menu_item">
                        <p>DÁNG ĐÀN</p>
                        <div class="underLineFooter"></div>
                        <a href="#contact">Dáng A</a>
                        <a href="#contact">Dáng Baden</a>
                        <a href="#contact">Dáng Classic - Grand Concert</a>
                        <a href="#contact">Dáng D</a>
                        <a href="#contact">Dáng D - Cutaway</a>
                        <a href="#contact">Kèn Harmonica</a>
                    </div>
                    <div class="menu_item">
                        <p>THƯƠNG HIỆU</p>
                        <div class="underLineFooter"></div>
                        <a href="#contact">Eko</a>
                        <a href="#contact">Epiphone</a>
                        <a href="#contact">Guitar Station</a>
                    </div>
                </div>
                <!-- ================== END MENU ================ -->
                <!-- ================== PRODUCT CATEGORY ================ -->
                
                <div class="main">
                    <div class="showShort" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="left">
                            <p style="font-weight: 600; color: #494949;">Đàn Guitar</p>
                            <!-- <p style="font-size: 16px; color: #494949;">Đang hiển thị <?php echo $item_per_page ?> trên tổng số <?php echo $totalRecords ?> sản phẩm</p> -->
                        </div>

                        <div class="right" style="color: #494949;">
                            <!-- <span style="font-size: 16px;">Sắp xếp theo: </span> -->

                            <div class="sp">
                                <div class="dropdown" >
                                   <!-- <span style="color: black; font-size: 18px" >Sắp xếp theo: </span>  -->
                                    <select onchange="this.options[this.selectedIndex].value &&(window.location = this.options[this.selectedIndex].value);">    
                                    <div class="dropdown-content" style="text-transform: uppercase; min-width: 100px; font-size: 14px;">
                                    <i class="fas fa-chevron-down"></i>    
                                        <option value="">Mặc định</option>
                                        <option value="?field=pro_price&sort=asc">Giá: từ thấp đến cao</option>
                                        <option value="?field=pro_price&sort=desc">Giá: cao đến thấp</option>
                                    </div>
                                    </select>
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="grid-container">
                        <?php while ($row = mysqli_fetch_array($seapro)) : ?>
                            <div class="grid-item">
                                <a href="product.php?cate_id=<?= $row['cate_id'] ?>&pro_id=<?= $row['pro_id'] ?>">
                                    <div class="item_img">
                                        <img src="img/product/<?php echo $row['pro_img'] ?>" alt="">
                                    </div>
                                    <a><?php echo $row['pro_name'] ?></a>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="newCost"><?php echo $row['pro_price'] ?>đ</span>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    require('./page.php');
                    ?>
                </div>

                <!-- ============= END PRODUCT CATEGORY ============== -->

            </div>
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
    <script src="./js/index.js"></script>
    <script src="./js/formLogin.js"></script>
    <script src="./js/product-category.js"></script>
    <script>
        window.addEventListener("scroll", function() {
            let header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>

</html>