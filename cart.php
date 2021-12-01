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
    <link rel="stylesheet" href="./css/newCart.css">
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
        $GLOBALS['changed_cart'] = false;
        if(!isset($_SESSION["cart"]))
        {
            $_SESSION["cart"]=array();
        }
        if(isset($_GET['action']))
        {
            function update_cart($connect,$add=false)
               {
                    foreach($_POST['cart_soluong'] as $id=>$quantity)
                    {
                        if($quantity==0)
                        {
                            unset($_SESSION['cart'][$id]);
                        }
                        else
                        {
                            if (!isset($_SESSION["cart"][$id])) {
                                $_SESSION["cart"][$id] = 0;
                            }
                            if($add)
                            {
                            $_SESSION["cart"][$id] += $quantity;
                            }
                            else
                            {
                            $_SESSION["cart"][$id] = $quantity;
                            }
                            $addProduct = mysqli_query($connect, "SELECT `pro_number` FROM `tbl_product` WHERE `pro_id` = " . $id);
                            
                            $addProduct = mysqli_fetch_assoc($addProduct);
                            
                            // var_dump($addProduct); exit;
                            if ($_SESSION["cart"][$id] > $addProduct['pro_number']) {
                                
                            $_SESSION["cart"][$id] = $addProduct['pro_number'];
                            //return $GLOBALS['test'] =  $addProduct['pro_number'];
                            $GLOBALS['changed_cart'] = true;
                            // boolval($GLOBALS['changed_cart']);
                            
                            // $_SESSION["HUY"] = boolean_value($GLOBALS['changed_cart']);
                            //getBien($GLOBALS['changed_cart']);
                            }
                             //var_dump($_SESSION["cart"][$id]); exit;
                        }
                        
                    }
                    
                }
           switch($_GET['action'])
           {
                case "add":
                    update_cart($connect,true);
                    if($GLOBALS['changed_cart'] == false){
                        header('location:./cart.php');
                    }
                    break;
                case "delete":
                    if(isset($_GET['id']))
                    {
                        unset($_SESSION['cart'][$_GET['id']]);
                    }
                    header('location:./cart.php');
                    break;
                case"submit":
                    if(isset($_POST['update_click']))
                    {
                        update_cart($connect);
                    }
                    else if(isset($_POST['order_click']))
                    {
                        if(empty($_POST['cart_soluong'])){
                            header('location: ./Error404.php');
                        }else{
                            
                            header('Location:./order.php'); 
                            
                        }
                    }
                    break;
           }
        }
        if(!empty($_SESSION['cart']))
        {
            $products = mysqli_query($connect,"SELECT * FROM `tbl_product` WHERE `pro_id` IN (".implode(",",array_keys($_SESSION["cart"])).")"); 
        }
        
        
    ?>
    <!-- ============ MAIN =============== -->
    <?php 
     if(empty($_SESSION['current_user'])){
        $message = "Chưa đăng nhập";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: ./register.php');
        } else {
     $currentUser = $_SESSION['current_user'];
    ?>
    <header>
        <?php 
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
    <?php
    if($GLOBALS['changed_cart']){
        ?>
            <div class="product">
                <h3>Sản phẩm đặt quá số lượng tồn kho, vui lòng <a href="./cart.php">đặt lại</a></h3>
            </div>
        <?php
    }  else {
    ?>
    <div class="product">
        <div class="container">
        <form id="cart-form" action ="cart.php?action=submit" method="POST">
            <div class="title-desc">
                <p>Giỏ Hàng</p>
            </div>
            <div class="table-cart">
                <div class="table-cart_left">
                    <table>
                        <tr>
                            <th>SẢN PHẨM</th>
                            <th>GIÁ</th>
                            <th>SỐ LƯỢNG</th>
                            <th>TẠM TÍNH</th>
                        </tr>
                        <?php if(!empty($products))
                        {
                            $thanhtien =0;
                            
                        while ($row = mysqli_fetch_array($products)) {?>
                        <tr>
                            <td>
                                <div class="information">
                                    <div class="del-item">
                                        <button>
                                            <div class="remove">
                                                <a href="cart.php?action=delete&id=<?=$row['pro_id']?>" class="fas fa-times" style="text-decoration: none;"> </a> 
                                            </div>
                                        </button>
                                    </div>
                                    <div class="item-cart">
                                        <div class="item-cart_img">
                                            <img src="./img/product/<?=$row['pro_img']?>" alt="">
                                        </div>
                                        <div class="item-cart_name">
                                            <p><?=$row['pro_name']?></p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="newCost"><?=$row['pro_price']?></span>
                            </td>
                            <td>
                                <div class="count">
                                        <input type="text" value="<?=$_SESSION['cart'][$row['pro_id']]?>" name="cart_soluong[<?=$row['pro_id']?>]"/>
                                        
                                </div>
                            </td>
                            <td>
                                <span class="newCost"><?=$row['pro_price'] * $_SESSION['cart'][$row['pro_id']]?></span>
                            </td>
                        </tr>
                        <?php  
                            $thanhtien += $row['pro_price'] * $_SESSION['cart'][$row['pro_id']];
                        } ?>

                    </table>
                    <div class="backToShop">
                        <button>
                            <a href="product-category.php">
                                <i class="fas fa-long-arrow-alt-left"></i>
                                TIẾP TỤC LỰA SẢN PHẨM
                            </a>
                        </button>
                    </div>
                </div>
                <div class="vertical"></div>
                <div class="table-cart_right">
                    <table>
                        <tr>
                            <th>TỔNG CỘNG GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-cnt">
                                    <div class="cart-cnt_title">
                                        <p>Tạm tính</p>
                                    </div>
                                    <div class="cart-cnt_value">
                                        <p><?= $thanhtien ?></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <div class="cart-total">
                                    <div class="cart-total_title">
                                        <p>Tổng cộng</p>
                                    </div>
                                    <div class="cart-total_value">
                                        <p><?= $thanhtien ?></p>
                                    </div>
                                </div>
                            </td>
                        </tr> 
                        <?php } ?>
                    </table>
                    <div class="pay">
                        <input type="submit" name="update_click" value="Cập nhật"> </input>
                        <input type="submit" name="order_click" value="ĐẶT HÀNG"></input>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>


<?php
    }
    ?>
    
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