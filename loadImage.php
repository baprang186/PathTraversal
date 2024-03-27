<?php
if (isset($_GET['file_name'])) {
    $file_name = $_GET['file_name'];
    $file_path = '/var/www/html/Image/img/' . $file_name;

    if (file_exists($file_path)) {
        $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        
        if ($file_extension == "jpg" || $file_extension == "jpeg") {
            header("Content-Type: image/jpeg");
        } elseif ($file_extension == "png") {
            header("Content-Type: image/png");
        } elseif ($file_extension == "gif") {
            header("Content-Type: image/gif");
        }
        readfile($file_path);
    } else {
        echo '<p color="red">404 Not Found !!!</p>';
    }

} else {
    echo 'Thiếu tham số file_name';
}
?>