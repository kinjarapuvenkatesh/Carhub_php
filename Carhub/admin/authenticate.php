<?php
session_start();
include 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, username, password FROM admin WHERE username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows == 1){

        $user = $result->fetch_assoc();

        if($password === $user['password']){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: addnewcars.php");
            exit();

        } else {
            header("Location:index.php?error=1");
            exit();
        }

    } else {
        header("Location:index.php?error=1");
        exit();
    }
}
?>