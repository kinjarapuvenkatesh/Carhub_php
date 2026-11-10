<?php

include 'connection.php';

try {

    if (!isset($_GET['id'])) {
        die("Invalid request.");
    }

    $id = (int)$_GET['id'];

    if ($id <= 0) {
        die("Invalid student ID.");
    }

    $stmt = mysqli_prepare(
        $conn,
        "DELETE FROM cars WHERE id =?"
    );

    if (!$stmt) {
        throw new Exception("Failed to prepare statement.");
    }

    mysqli_stmt_bind_param($stmt, "i", $id);

    if (!mysqli_stmt_execute($stmt)) {
        throw new Exception("Failed to delete record.");
    }

    mysqli_stmt_close($stmt);

    header("Location: manage.php");
    exit();

} catch (Exception $e) {

    echo "Error: " . htmlspecialchars($e->getMessage());

}
?>