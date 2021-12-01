<?php
    require_once('../../db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <title>Product</title>
    <style>
        * {
            font-family: 'Work Sans', sans-serif;
        }
    </style>
</head>
<body>

    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'show':
                    require_once './user_show.php';
                    break;
                case 'add':
                    require_once './user_add.php';
                    break;
                case 'edit':
                    require_once './user_edit.php';
                    break;
                case 'delete':
                    require_once './user_delete.php';
                    break;   
                
                default:
                    require_once './user_show.php';
                    break;
            }
        } else {
            require_once './user_show.php';
        }   

    ?>
</body>
</html>