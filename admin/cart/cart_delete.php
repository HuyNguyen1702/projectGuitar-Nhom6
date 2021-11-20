<?php 
    $pro_id = $_GET['pro_id'];
    $sql = "DELETE FROM tbl_cart where pro_id = $pro_id";
    $query = mysqli_query($connect, $sql);
    header('location: cart_show.php?page_layout=show');
?>