<?php
    session_start();
    include 'conn.php';
    $id = $_SESSION["user"]["user_id"];
    $pass = $_POST["user_password"];
    $mail = $_POST["user_email"];
    $name = $_POST["user_name"];
    $sql = "UPDATE `users` SET `user_name`='$name',`user_email`='$mail',`user_password`='$pass' WHERE `user_id` = $id";
    $conn->exec($sql);
    $_SESSION["user"]["user_password"] = $pass;
    $_SESSION["user"]["user_email"] = $mail;
    $_SESSION["user"]["user_name"] = $name;
    header('location: homepage.php');
?>