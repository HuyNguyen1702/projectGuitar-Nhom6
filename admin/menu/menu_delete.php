<?php 
    $menu_id = $_GET['menu_id'];
    $sql = "DELETE FROM tbl_menu where menu_id = $menu_id";
    $query = mysqli_query($connect, $sql);
    header('location: menu_show.php?page_layout=show');
?>