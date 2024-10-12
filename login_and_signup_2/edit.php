<?php
    session_start();
    include 'conn.php';
    $id = $_SESSION["user"]["user_id"];
    $name = $_POST["user_name"];
    $pass = $_POST["user_password"];
    $mail = $_POST["user_email"];
    $mobile = $_POST["user_Mobile"];
    $birth_date = $_POST["user_birth_date"];
    $sql = "UPDATE `users` SET `user_name`='$name',`user_email`='$mail',`user_password`='$pass', `user_Mobile`='$mobile', `user_birth_date`='$birth_date' WHERE `user_id` = $id";
    $conn->exec($sql);
    $_SESSION["user"]["user_name"] = $name;
    $_SESSION["user"]["user_password"] = $pass;
    $_SESSION["user"]["user_email"] = $mail;
    $_SESSION["user"]["user_Mobile"] = $mobile;
    $_SESSION["user"]["user_birth_date"] = $birth_date;
    header('location: homepage.php');
?>