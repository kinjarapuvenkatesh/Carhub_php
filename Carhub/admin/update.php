<?php
include 'connection.php';

$id = $_POST['id'];
$title = $_POST['title'];
$model = $_POST['model'];
$price = $_POST['price'];
$km = $_POST['km'];
$fuel = $_POST['fuel'];
$year = $_POST['year'];
$transmission = $_POST['transmission'];
$color = $_POST['color'];

// 1. Build the base SQL string for text fields
$sql = "UPDATE cars SET
title='$title',
model='$model',
price='$price',
km='$km',
fuel='$fuel',
year='$year',
transmission='$transmission',
color='$color'";

// 2. Check if new images were uploaded
if(isset($_FILES['images']) && $_FILES['images']['error'][0] == 0){
    
    $imageNames = [];
    $totalFiles = count($_FILES['images']['name']);
    
    // Loop through all uploaded files
    for($i = 0; $i < $totalFiles; $i++){
        if($_FILES['images']['error'][$i] == 0){
            // Add a timestamp to prevent overwriting images with the same name
            $fileName = time() . "_" . basename($_FILES['images']['name'][$i]);
            $targetFilePath = "uploads/" . $fileName;
            
            // Move file to uploads directory
            if(move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath)){
                $imageNames[] = $fileName;
            }
        }
    }
    
    // If images were successfully uploaded, append to SQL query
    if(!empty($imageNames)){
        $imagesString = implode(",", $imageNames);
        $sql .= ", images='$imagesString'";
    }
}

// 3. Complete the query with the WHERE clause
$sql .= " WHERE id='$id'";

mysqli_query($conn, $sql);

header("Location: manage.php");
exit();
?>