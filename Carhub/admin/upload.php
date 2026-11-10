<?php
include 'connection.php';

// Sanitize inputs
$title = mysqli_real_escape_string($conn, $_POST['title']);
$model = mysqli_real_escape_string($conn, $_POST['model']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$km    = mysqli_real_escape_string($conn, $_POST['km']);
$fuel  = mysqli_real_escape_string($conn, $_POST['fuel']);
$year  = mysqli_real_escape_string($conn, $_POST['year']);
$trans = mysqli_real_escape_string($conn, $_POST['trans']);
$color = mysqli_real_escape_string($conn, $_POST['color']);

$images = [];

if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['name'] as $key => $name) {
        $tmp = $_FILES['images']['tmp_name'][$key];
        $error = $_FILES['images']['error'][$key];

        if ($error === UPLOAD_ERR_OK && is_uploaded_file($tmp)) {
            
            $originalName = preg_replace("/[^a-zA-Z0-9.\-_]/", "", basename($name));
            $target = "uploads/" . $originalName;
            $finalName = $originalName;

            if (file_exists($target)) {
            
                if (md5_file($tmp) === md5_file($target)) {
                    $finalName = $originalName; 
                } else {
                    $pathInfo = pathinfo($originalName);
                    $base = $pathInfo['filename'];
                    $ext = isset($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
                    
                    $counter = 1;
                    while (file_exists("uploads/" . $base . "_" . $counter . $ext)) {
                        $counter++;
                    }
                    $finalName = $base . "_" . $counter . $ext;
                    $target = "uploads/" . $finalName;
                    
                    move_uploaded_file($tmp, $target);
                }
            } else {
                move_uploaded_file($tmp, $target);
            }

            $images[] = $finalName;
        }
    }
}

$images = array_unique($images);

$imageString = implode(",", $images);

$sql = "INSERT INTO cars 
(title, model, price, km, fuel, year, transmission, color, images)
VALUES
('$title', '$model', '$price', '$km', '$fuel', '$year', '$trans', '$color', '$imageString')";

if (mysqli_query($conn, $sql)) {
    header("Location: manage.php");
    exit;
} else {
    echo "Database Error: " . mysqli_error($conn);
}
?>