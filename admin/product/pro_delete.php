<?php 
    $pro_id = $_GET['pro_id'];
    $sql = "DELETE FROM tbl_product where pro_id = $pro_id";
    $query = mysqli_query($connect, $sql);
    header('location: pro_show.php?page_layout=show');
?>