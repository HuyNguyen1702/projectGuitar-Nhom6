<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../product.css">
    <link rel="stylesheet" href="../product/pro.css">
    <link rel="stylesheet" href="../pagination.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>

    <style>
        * {
            font-family: 'Work Sans', sans-serif;
        }
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
        $where = "WHERE 'menu_id' LIKE '%" . $search . "%'";
    }
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $item_per_page;
    if ($search) {
        $sql = "SELECT * FROM `tbl_menu` WHERE `menu_id` LIKE '%" . $search . "%' OR `menu_name` LIKE '%" . $search . "%' LIMIT " . $item_per_page . " OFFSET " . $offset;
        $totalRecords = mysqli_query($connect, "SELECT * FROM `tbl_menu` WHERE `menu_id` LIKE '%" . $search . "%' OR `menu_name` LIKE '%" . $search . "%' ");
    } else {
        $sql = "SELECT * FROM tbl_menu LIMIT " . $item_per_page . " OFFSET " . $offset;
        $totalRecords = mysqli_query($connect, "SELECT * FROM `tbl_menu`");
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
            <div class="nav-small" style="height: calc(100vh - 80px); width:192px;">
                <div class="nav-small_left">
                <div class="nav-item">
                        <a href="../homepage.php">TỔNG QUAN</a>
                    </div>
                    <div class="nav-item">
                        <a href="menu.php">DANH MỤC</a>
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
                        <a href="../cart/cart.php">GIỎ HÀNG</a>
                    </div>
                </div>
            </div>
            <div class="display-data" style="margin-right:auto !important; margin-left: auto !important; ">
                <div class="title">
                    <span> DANH MỤC </span>
                </div>
                <div class="action" style="margin-bottom: 20px;">
                    <form action="" method="GET">
                        <input type="text" style="padding: 10px; width: 250px; border: 1px solid #ddd;" placeholder="Nhập danh mục cần tìm" value="<?= isset($_GET['ten']) ? $_GET['ten'] : "" ?>" name="ten" />
                        <input type="submit" class="btn btn-secondary" value="Tìm kiếm danh mục" style="height: 39px;">
                        <a class="btn btn-primary" href="menu.php?page_layout=add">Thêm mới</a>
                        <a href="menu.php?page_layout=show" class="btn btn-primary"><i class="fa fa-refresh"></i>Tải lại</a>
                    </form>
                </div>
                <div class="table-cart_left">
                    <table style="width: 1640px; border-collapse: inherit;  border: 1px solid #ddd; border-radius: 20px;">
                        <tr>
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th style="width: 130px">THAO TÁC</th>
                            <th style="width: 130px"></th>
                        </tr>

                        <!-- =================================== -->
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td>
                                    <div class="cate_id">
                                        <?php echo $row['menu_id'] ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="pro_id">
                                        <?php echo $row['menu_name'] ?>
                                    </div>
                                </td>
                                <td style="padding: 10px !important;">
                                    <div class="button-edit">
                                        <a type="button" href="menu.php?page_layout=edit&menu_id=<?php echo $row['menu_id']; ?>">Edit</a>
                                    </div>
                                </td>
                                <td style="padding: 10px !important;">
                                    <div class="btn-del">
                                        <a type="button" href="menu.php?page_layout=delete&menu_id=<?php echo $row['menu_id']; ?>">Delete</a>
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
</body>

</html>