<?php
            $cate1 = mysqli_query($connect,"SELECT * FROM `tbl_category` WHERE `menu_id` = 1 AND`cate_status` = 1 ORDER BY `cate_status` ASC");
            $cate2 = mysqli_query($connect,"SELECT * FROM `tbl_category` WHERE `menu_id` = 2 AND `cate_status` = 1 ORDER BY `cate_status` ASC");
            $cate3 = mysqli_query($connect,"SELECT * FROM `tbl_category` WHERE `menu_id` = 3 AND `cate_status` = 1 ORDER BY `cate_status` ASC");
            $cate4 = mysqli_query($connect,"SELECT * FROM `tbl_category` WHERE `menu_id` = 4 AND `cate_status` = 1 ORDER BY `cate_status` ASC");
            $cate5 = mysqli_query($connect,"SELECT * FROM `tbl_category` WHERE `menu_id` = 5 AND `cate_status` = 1 ORDER BY `cate_status` ASC");
?>