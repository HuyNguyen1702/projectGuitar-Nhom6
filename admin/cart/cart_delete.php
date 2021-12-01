<?php 
    $cart_id = $_GET['cart_id'];
    $sql = "DELETE FROM `tbl_cartinf` WHERE `cart_id` = ".$cart_id ."";
    $query = mysqli_query($connect, $sql);
    header('location: cart_show.php?page_layout=show');
?>