<?php 
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM tbl_user where user_id = $user_id";
    $query = mysqli_query($connect, $sql);
    header('location: user_show.php?page_layout=show');
?>