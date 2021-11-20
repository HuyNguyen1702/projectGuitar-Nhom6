<?php 
function uploadFiles($uploadedFiles) {
    $files = array();
    $errors = array();
    //Xử lý gom dữ liệu vào từng file đã upload
    foreach ($uploadedFiles as $key => $values) {
        foreach ($values as $index => $value) {
            $files[$index][$key] = $value;
        }
    }
    $uploadPath = "./uploads/" . date('d-m-Y', time());
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }
    foreach ($files as $file) {
        $file = validateUploadFile($file, $uploadPath);
        if ($file != false) {
            move_uploaded_file($file["tmp_name"], $uploadPath . '/' . $file["name"]);
        } else {
            $errors[] = "The file " . basename($file["name"]) . " isn't valid.";
        }
    }
    return $errors;
}
function getAllFiles() {
    $allFiles = array();
    $allDirs = glob('uploads/*');
    foreach ($allDirs as $dir) {
        $allFiles = array_merge($allFiles, glob($dir . "/*"));
    }
    return $allFiles;
}
//Check file hợp lệ
function validateUploadFile($file, $uploadPath) {
    //Kiểm tra xem có vượt quá dung lượng cho phép không?
    if ($file['size'] > 2 * 1024 * 1024) { //max upload is 2 Mb = 2 * 1024 kb * 1024 bite
        return false;
    }
    //Kiểm tra xem kiểu file có hợp lệ không?
    $validTypes = array("jpg", "jpeg", "png", "bmp","xls","xlsx","doc","docx");
    $fileType = substr($file['name'], strrpos($file['name'], ".") + 1);
    if (!in_array($fileType, $validTypes)) {
        return false;
    }
    //Check xem file đã tồn tại chưa? Nếu tồn tại thì đổi tên
    $num = 1;
    $fileName = substr($file['name'], 0, strrpos($file['name'], "."));
    while (file_exists($uploadPath . '/' . $fileName . '.' . $fileType)) {
        $fileName = $fileName . "(" . $num . ")";
        $num++;
    }
    $file['name'] = $fileName . '.' . $fileType;
    return $file;
}
?>