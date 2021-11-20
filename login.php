<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bài 12: Hướng dẫn tạo trang quản trị (admin): quản lý sản phẩm - Phần 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #user_login form{
                width: 200px;
                margin: 40px auto;
            }
            #user_login form input{
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
    <?php
        session_start();
        include 'db.php';
        $error = false;
        if (isset($_POST['user_name']) && !empty($_POST['user_name']) && isset($_POST['user_pass']) && !empty($_POST['user_pass'])) {
            $result = mysqli_query($connect, "SELECT `user_id`,`user_name` from `tbl_user` WHERE (`user_name` ='" . $_POST['user_name'] . "' AND `user_pass` ='" . $_POST['user_pass'] . "')");
            if (!$result) {
                $error = mysqli_error($con);
            } else {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['current_user'] = $user;
            }
            mysqli_close($connect);
            if ($error !== false || $result->num_rows == 0) {
                ?>
                <div id="login-notify" class="box-content">
                    <h1>Thông báo</h1>
                    <h4><?= !empty($error) ? $error : "Thông tin đăng nhập không chính xác" ?></h4>
                    <a href="./index.php">Quay lại</a>
                </div>
                <?php
                exit;
            }
            ?>
        <?php } ?>
        <?php if (empty($_SESSION['current_user'])) { ?>
            <div id="user_login" class="box-content">
                <h1>Đăng nhập tài khoản</h1>
                <form action="./login.php" method="Post" autocomplete="off">
                    <div id="id01" class="modal">
                    <div class="imgcontainer">
                        <div class="img">
                            <img src="./img/Logo-White-e1543120531648.png" alt="" class="avatar">
                        </div>
                        <div class="closebtn">
                            <span onclick="closeForm()" class="close" title="Close Modal" id="close">&times;</span>
                        </div>
                    </div>

                    <div class="conTainer">
                        <label for="uname"><b>Email đăng nhập *</b></label>
                        <input type="text" placeholder="Email" name="user_name" required id="id_userName" value="">
                        <label for="psw"><b>Mật khẩu *</b></label>
                        <input type="password" placeholder="Mật khẩu" name="user_pass"
                            autocomplete="current-password" required id="id_password">
                        <i class="far fa-eye" id="togglePassword"
                            style="margin-left: -30px; cursor: pointer; position: absolute; top: 41.7%;"></i>
                        <div class="login" style="display: flex; justify-content: space-between;">
                            <div class="loginNor">
                                <button type="submit">Đăng nhập</button>
                            </div>
                            <div class="loginSocial">
                                <button><i class="fab fa-facebook-f"></i></button>
                                <button><i class="fab fa-google"></i></button>
                            </div>
                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="remember" style="cursor: pointer"> Ghi nhớ mật khẩu
                        </label>
                    </div>

                    <div class="conTainer" style="background-color:#f1f1f1; width: 448px !important;">
                        <p>Bạn chưa có tài khoản?</p>
                        <button type="button" onclick="closeForm()" class="cancelbtn">Đăng kí</button>
                        <span class="psw">Quên<a href="#">mật khẩu?</a></span>
                    </div>
                </form>
            </div>
                </form>
            </div>
            <?php
        } else {
            $currentUser = $_SESSION['current_user'];
            ?>
            <div id="login-notify" class="box-content">
                Xin chào <?= $currentUser['user_name'] ?><br/>
                <a href="./admin/product/product.php">Quản lý sản phẩm</a><br/>
                <a href="./edit.php">Đổi mật khẩu</a><br/>
                <a href="./logout.php">Đăng xuất</a>
            </div>
        <?php } ?>
    </body>
</html>