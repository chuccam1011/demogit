<?php

if (isset($_FILES['file']) && $_FILES['file']['name'] != null) {
    $size = $_FILES['file']['size'];
    var_dump($_FILES);
    $error = [];
    //nếu mà kích cỡ file mà lớn hơn 3 mb
    if ($size > 3 * 1024 * 1024) {
        $error[] = 'Kích thuớc file phải nhỏ hơn 3mb';
    }

    // $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    // if ($ext != 'png') {
    //     $error[] = 'File phải có định dạng png';
    // }
    if (isset($error) && count($error) != 0) {
        foreach ($error as $r) {
            echo $r;
        }
    }
    if (count($error) == 0) {
        $dir = date('m', time()) . '_' . date('yy', time()) . '/'; // 3_2020 định dạng;
        $dir = 'uploads/' . $dir; // uploads/3_2020;

        // tạo thư mục mới nếu chưa tồn tại (tạo thư mục theo tháng và năm)
        if (!file_exists($dir) && !is_dir($dir)) {
            mkdir($dir, 0777); //make directory
        }

        $tmpFile = $_FILES['file']['tmp_name'];
        echo time();
        $realPath = $dir . time() . str_replace(' ', '_', $_FILES['file']['name']);
        //di chuyển file từ thư mục tạm sang thư mục thật
        move_uploaded_file($tmpFile, $realPath);

        if (isset($_POST['gui'])) {
            var_dump($_POST);
        }
        $file = fopen('wt.txt', 'w');
        $txt = $_POST['hoten'] . "\n";
        fwrite($file, $txt);
        $txt = $_POST['gender'] . "\n";
        fwrite($file, $txt);
        $txt = $realPath;
        fwrite($file, $txt);
        fclose($file);
        header('Location:view.php');
    }
} else {
    echo 'ko cos';
}
