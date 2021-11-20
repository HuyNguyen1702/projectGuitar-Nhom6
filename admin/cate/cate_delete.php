<?php 
    $cate_id = $_GET['cate_id'];
    $sql = "DELETE FROM tbl_category where cate_id = $cate_id";
    $query = mysqli_query($connect, $sql);
    header('location: cate_show.php?page_layout=show');
?>