<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../product.css">
    <link rel="stylesheet" href="../pagination.css">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table {
            box-shadow: 0 5px 8px 0 rgba(50, 50, 50, 0.35);
            -webkit-box-shadow: 0 5px 8px 0 rgba(50, 50, 50, 0.35);
            -moz-box-shadow: 0 5px 8px 0 rgba(50, 50, 50, 0.35);
        }

        table tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>

<body>

    <?php
    session_start();
    include '../../db.php';
    $search = isset($_GET['ten']) ? $_GET['ten'] : "";
    if ($search) {
        $where = "WHERE 'pro_id' LIKE '%" . $search . "%' OR 'pro_name' LIKE '%" . $search . "%' OR `pro_price` LIKE '%" . $search . "%' OR `pro_number` LIKE '%" . $search . "%' OR `cate_id` LIKE '%" . $search . "%' OR `pro_band` LIKE '%" . $search . "%'";
    }
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    if ($search) {
        $sql = "SELECT * FROM `tbl_product` WHERE `cate_id` LIKE '%" . $search . "%' OR `pro_id` LIKE '%" . $search . "%' OR `pro_name` LIKE '%" . $search . "%' OR `pro_price` LIKE '%" . $search . "%' OR `pro_number` LIKE '%" . $search . "%' OR `pro_band` LIKE '%" . $search . "%'LIMIT " . $item_per_page . " OFFSET " . $offset;
        $totalRecords = mysqli_query($connect, "SELECT * FROM `tbl_product` WHERE `cate_id` LIKE '%" . $search . "%' OR `pro_name` LIKE '%" . $search . "%' OR `pro_price` LIKE '%" . $search . "%' OR `pro_number` LIKE '%" . $search . "%' OR `pro_band` LIKE '%" . $search . "%' ");
    } else {
        $sql = "SELECT * FROM tbl_product LIMIT " . $item_per_page . " OFFSET " . $offset;
        $totalRecords = mysqli_query($connect, "SELECT * FROM `tbl_product`");
    }
    $totalRecords = $totalRecords->num_rows;
    $totalRecords = ceil($totalRecords / $item_per_page);
    $query = mysqli_query($connect, $sql);
    // $sql = "SELECT * FROM `tbl_product`";
    // $query = mysqli_query($connect, $sql);
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
            <div class="nav-small">
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
                        <a href="product.php">SẢN PHẨM</a>
                    </div>
                    <div class="nav-item">
                        <a href="../user/user.php">TÀI KHOẢN</a>
                    </div>
                    <div class="nav-item">
                        <a href="../cart/cart.php">GIỎ HÀNG</a>
                    </div>
                </div>
            </div>
            <div class="display-data">
                <div class="title">
                    <span> SẢN PHẨM </span>
                </div>
                <div class="action" style="margin-bottom: 20px;">
                    <form action="" method="GET">
                        <input type="text" style="padding: 10px; width: 250px; border: 1px solid #ddd;" placeholder="Nhập sản phẩm cần tìm" value="<?= isset($_GET['ten']) ? $_GET['ten'] : "" ?>" name="ten" />
                        <input type="submit" class="btn btn-secondary" value="Tìm kiếm sản phẩm" style="height: 39px;">
                        <a class="btn btn-primary" href="product.php?page_layout=add">Thêm mới</a>
                        <a href="product.php?page_layout=show" class="btn btn-primary"><i class="fa fa-refresh"></i>Tải lại</a>
                    </form>
                </div>
                <div class="table-cart_left">
                    <table style="border-collapse: inherit;  border: 1px solid #ddd; border-radius: 20px;">
                        <tr>
                            <th>DANH MỤC</th>
                            <th>MÃ SẢN PHẨM</th>
                            <th>SẢN PHẨM</th>
                            <th>GIÁ</th>
                            <th>Số LƯỢNG</th>
                            <th>ẢNH ĐẠI DIỆN</th>
                            <th>ẢNH CHI TIẾT</th>
                            <th>NHÃN HÀNG</th>
                            <th style="width: 500px;">MÔ TẢ</th>
                            <th>THAO TÁC</th>
                            <th></th>
                        </tr>

                        <!-- =================================== -->
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td>
                                    <div class="cate_id">
                                        <?php echo $row['cate_id'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="pro_id">
                                        <?php echo $row['pro_id'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="pro_name">
                                        <?php echo $row['pro_name'] ?>
                                    </div>
                                </td>
                                <td>
                                    <span class="newCost"><?php echo $row['pro_price'] ?></span>
                                </td>
                                <td>
                                    <div class="pro_number">
                                        <?php echo $row['pro_number'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="pro_img">
                                        <img src="../../img/product/<?php echo $row['pro_img'] ?>" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="des_img2">
                                        <table style="box-shadow :none;">
                                            <tr>
                                                <td>
                                                    <img style="width:55px;" src="../../img/moreInfor/<?php echo $row['pro_img1'] ?>" alt="">
                                                    <img style="width:55px;" src="../../img/moreInfor/<?php echo $row['pro_img2'] ?>" alt="">
                                                </td>
                                                <td>
                                                    <img style="width:auto; height:50px;" src="../../img/moreInfor/<?php echo $row['pro_img3'] ?>" alt="">
                                                    <img style="width:auto;  height:50px;" src="../../img/moreInfor/<?php echo $row['pro_img4'] ?>" alt="">
                                                </td>

                                            </tr>
                                        </table>

                                    </div>
                                </td>
                                <td>
                                    <div class="pro_brand">
                                    <?php echo $row['pro_band'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="pro_des">
                                    <?php echo $row['pro_des'] ?>    
                                        
                                    </div>
                                </td>
                                <td style="padding: 10px !important;">

                                    <div class="button-edit">
                                        <a type="button" href="product.php?page_layout=edit&pro_id=<?php echo $row['pro_id']; ?>">Edit</a>
                                    </div>

                                </td>
                                <td style="padding: 10px !important;">
                                    <div class="btn-del">
                                        <a type="button" href="product.php?page_layout=delete&pro_id=<?php echo $row['pro_id']; ?>">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                    <?php
                    include '../pagination.php';
                    ?>
                <?php }
                ?>
                </div>
            </div>
        </div>
</body>

</html>