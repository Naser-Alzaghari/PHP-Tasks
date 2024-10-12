<?php
    session_start();
    include 'conn.php';
    $id = $_SESSION["user"]["user_id"];
    $sql = "DELETE FROM `users` WHERE `user_id` = $id";
    $conn->exec($sql);
    unset($_SESSION["user"]);
    header('location: index.php');
?>