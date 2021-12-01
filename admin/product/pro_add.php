<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="../product.css">
    <link rel="stylesheet" href="newAdd.css">
    <link rel="stylesheet" href="pro.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="../pagination.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384- fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>

<body>

    <?php
    global $img_del;
    include 'function.php';
    session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'qlchguitar');
    $sql = "SELECT * FROM tbl_product";
    $query = mysqli_query($connect, $sql);

    if (isset($_POST['sbm']) && isset($_FILES['pro_img'])) {

        $img_name = $_FILES['pro_img']['name'];
        $img_size = $_FILES['pro_img']['size'];
        $tmp_name = $_FILES['pro_img']['tmp_name'];
        $error = $_FILES['pro_img']['error'];



        if ($error == 0) {
            if ($img_size > 125000) {
                $em = "Sorry, your file is too large";
            } else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

                //$img_name = ten file = cat03.jpg
                //$img_ex = type file = jpg

                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {

                    $num = 1;
                    $fileName = substr($img_name, 0, strrpos($img_name, "."));

                    $img_path = '../../img/product/';

                    while (file_exists($img_path . '/' . $fileName . '.' . $img_ex)) {
                        $fileName = $fileName . "(" . $num . ")";
                        $num++;
                    }
                    $img_name = $fileName . '.' . $img_ex;
                    $img_upload_path = '../../img/product/' . $img_name;
                    $img_del = $img_upload_path;
                    move_uploaded_file($tmp_name, $img_upload_path);
                }
            }
        }

        $img_name1 = $_FILES['pro_img1']['name'];
        $img_size1 = $_FILES['pro_img1']['size'];
        $tmp_name1 = $_FILES['pro_img1']['tmp_name'];
        $error1 = $_FILES['pro_img1']['error'];

        if ($error1 == 0) {
            if ($img_size1 > 125000) {
                $em1 = "Sorry, your file is too large";
            } else {
                $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);

                //$img_name = ten file = cat03.jpg
                //$img_ex = type file = jpg

                $img_ex_lc1 = strtolower($img_ex1);

                $allowed_exs1 = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc1, $allowed_exs1)) {

                    $num1 = 1;
                    $fileName1 = substr($img_name1, 0, strrpos($img_name1, "."));

                    $img_path1 = '../../img/moreInfor/';

                    while (file_exists($img_path1 . '/' . $fileName1 . '.' . $img_ex1)) {
                        $fileName1 = $fileName1 . "(" . $num1 . ")";
                        $num1++;
                    }
                    $img_name1 = $fileName1 . '.' . $img_ex1;
                    $img_upload_path1 = '../../img/moreInfor/' . $img_name1;
                    move_uploaded_file($tmp_name1, $img_upload_path1);
                }
            }
        }

        // Ảnh chi tiết 2

        $img_name2 = $_FILES['pro_img2']['name'];
        $img_size2 = $_FILES['pro_img2']['size'];
        $tmp_name2 = $_FILES['pro_img2']['tmp_name'];
        $error2 = $_FILES['pro_img2']['error'];

        if ($error2 == 0) {
            if ($img_size2 > 125000) {
                $em2 = "Sorry, your file is too large";
            } else {
                $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);

                //$img_name = ten file = cat03.jpg
                //$img_ex = type file = jpg

                $img_ex_lc2 = strtolower($img_ex2);

                $allowed_exs2 = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc2, $allowed_exs2)) {

                    $num2 = 1;
                    $fileName2 = substr($img_name2, 0, strrpos($img_name2, "."));

                    $img_path2 = '../../img/moreInfor/';

                    while (file_exists($img_path2 . '/' . $fileName2 . '.' . $img_ex2)) {
                        $fileName2 = $fileName2 . "(" . $num2 . ")";
                        $num2++;
                    }
                    $img_name2 = $fileName2 . '.' . $img_ex2;
                    $img_upload_path2 = '../../img/moreInfor/' . $img_name2;
                    move_uploaded_file($tmp_name2, $img_upload_path2);
                }
            }
        }

        // Ảnh chi tiết 3

        $img_name3 = $_FILES['pro_img3']['name'];
        $img_size3 = $_FILES['pro_img3']['size'];
        $tmp_name3 = $_FILES['pro_img3']['tmp_name'];
        $error3 = $_FILES['pro_img3']['error'];

        if ($error3 == 0) {
            if ($img_size3 > 125000) {
                $em3 = "Sorry, your file is too large";
            } else {
                $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);

                //$img_name = ten file = cat03.jpg
                //$img_ex = type file = jpg

                $img_ex_lc3 = strtolower($img_ex3);

                $allowed_exs3 = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc3, $allowed_exs3)) {

                    $num3 = 1;
                    $fileName3 = substr($img_name3, 0, strrpos($img_name3, "."));

                    $img_path3 = '../../img/moreInfor/';

                    while (file_exists($img_path3 . '/' . $fileName3 . '.' . $img_ex3)) {
                        $fileName3 = $fileName3 . "(" . $num3 . ")";
                        $num3++;
                    }
                    $img_name3 = $fileName3 . '.' . $img_ex3;
                    $img_upload_path3 = '../../img/moreInfor/' . $img_name3;
                    move_uploaded_file($tmp_name3, $img_upload_path3);
                }
            }
        }

        // Ảnh chi tiết 4

        $img_name4 = $_FILES['pro_img4']['name'];
        $img_size4 = $_FILES['pro_img4']['size'];
        $tmp_name4 = $_FILES['pro_img4']['tmp_name'];
        $error4 = $_FILES['pro_img4']['error'];

        if ($error4 == 0) {
            if ($img_size4 > 125000) {
                $em4 = "Sorry, your file is too large";
            } else {
                $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);

                //$img_name = ten file = cat04.jpg
                //$img_ex = type file = jpg

                $img_ex_lc4 = strtolower($img_ex4);

                $allowed_exs4 = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc4, $allowed_exs4)) {

                    $num4 = 1;
                    $fileName4 = substr($img_name4, 0, strrpos($img_name4, "."));

                    $img_path4 = '../../img/moreInfor/';

                    while (file_exists($img_path4 . '/' . $fileName4 . '.' . $img_ex4)) {
                        $fileName4 = $fileName4 . "(" . $num4 . ")";
                        $num4++;
                    }
                    $img_name4 = $fileName4 . '.' . $img_ex4;
                    $img_upload_path4 = '../../img/moreInfor/' . $img_name4;
                    move_uploaded_file($tmp_name4, $img_upload_path4);
                }
            }
        }

        $cate_id = $_POST['cate_id'];
        $pro_id = $_POST['pro_id'];
        $pro_name = $_POST['pro_name'];
        $pro_price = $_POST['pro_price'];
        $pro_rate = $_POST['pro_rate'];
        $pro_des = $_POST['pro_des'];
        $pro_number = $_POST['pro_number'];
        $pro_band = $_POST['pro_band'];

        //$query = mysqli_query($connect,$sql);
        $sql = "INSERT INTO `tbl_product`(`cate_id`, `pro_id`, `pro_name`, `pro_price`, `pro_rate`, `pro_number`, `pro_img`,`pro_img1`,`pro_img2`,`pro_img3`, `pro_img4`,`pro_band`, `pro_des`) VALUES ('$cate_id','$pro_id','$pro_name','$pro_price','$pro_rate','$pro_number','$img_name','$img_name1','$img_name2','$img_name3','$img_name4','$pro_band','$pro_des')";
        $result = mysqli_query($connect, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($connect), E_USER_ERROR);


    }
    
    
    
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
                    <span>THÊM SẢN PHẨM MỚI</span>
                </div>
                <div class="add">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <label for="fname">Mã Danh Mục</label>
                        <input type="text" id="fname" name="cate_id" placeholder="Mã danh mục">

                        <label for="fname">Mã Sản Phẩm</label>
                        <input type="text" id="fname" name="pro_id" placeholder="Mã sản phẩm">

                        <label for="lname">Tên Sản Phẩm</label>
                        <input type="text" id="lname" name="pro_name" placeholder="Tên sản phẩm">

                        <label for="lname">Giá Tiền</label>
                        <input type="number" id="lname" name="pro_price" placeholder="Giá Tiền">

                        <label for="lname">Đánh Giá</label>
                        <input type="text" id="lname" name="pro_rate" placeholder="Đánh Giá">

                        <label for="lname">Số lượng</label>
                        <input type="text" id="lname" name="pro_number" placeholder="Số lượng">

                        <label for="lname">Ảnh Đại Diện</label>
                        <input type="file" id="lname" name="pro_img" placeholder="Hình Ảnh">

                        <label for="lname">Ảnh Chi Tiết 1</label>
                        <input type="file" id="lname" name="pro_img1" placeholder="Hình Ảnh">

                        <label for="lname">Ảnh Chi Tiết 2</label>
                        <input type="file" id="lname" name="pro_img2" placeholder="Hình Ảnh">

                        <label for="lname">Ảnh Chi Tiết 3</label>
                        <input type="file" id="lname" name="pro_img3" placeholder="Hình Ảnh">

                        <label for="lname">Ảnh Chi Tiết 4</label>
                        <input type="file" id="lname" name="pro_img4" placeholder="Hình Ảnh">

                        <label for="lname">Nhãn Hàng</label>
                        <input type="text" id="lname" name="pro_band" placeholder="Nhãn Hàng">

                        <label for="lname">Mô Tả</label>
                        <textarea name="pro_des" id="content" placeholder="Mô Tả"></textarea><br>

                        <div class="btn" style="display: flex; ">
                            <div class="button-save" style="margin: 8px 10px 0px 0px;">
                                <button type="submit" name="sbm"> LƯU </button>
                            </div>

                            <div class="btn-exit" style="margin: 8px 10px;">
                                <button>
                                    <div class="exit">
                                        <a href="product.php?page_layout=show">THOÁT</a>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script>
            CKEDITOR.replace('pro_des', {
                filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
            });
        </script>
    <?php }
    ?>
</body>

</html>