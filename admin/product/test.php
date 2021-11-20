<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include'function.php';
        if(isset($_GET['upload']) && $_GET['upload'] == 'file'){
            $uploadedFiles = $_FILES['file_upload'];
            $errors = uploadFiles($uploadedFiles);
            if(!empty($errorss)){
                print_r($errors);
                exit;
            }
        }else{
        ?>
        <div>
        <form id="upload-file-form" action="?upload=file" method = "POST" enctype = "multipart/form-data">
            <input  multiple type ="file" name="file_upload[]"/>
            <input type="submit" value = "Upload File">;
        </form>
        </div>
         <?php
        }
    ?>
    
</body>
</html>