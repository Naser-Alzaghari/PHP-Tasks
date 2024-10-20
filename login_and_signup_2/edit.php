<?php
    session_start();
    include 'conn.php';
    $id = $_POST["user_id"];
    $name = $_POST["user_name"];
    $pass = password_hash($_POST["user_password"], PASSWORD_DEFAULT);
    $mail = $_POST["user_email"];
    $mobile = $_POST["user_Mobile"];
    $birth_date = $_POST["user_birth_date"];
    
    if(isset($_POST['make_admin'])){
        $make_admin = $_POST["make_admin"];
        if($make_admin == "admin"){
            $is_admin = true;
        } else {
            $is_admin = 0;
        }
    } else {
        $is_admin = 0;
    }
    


    $sql = "UPDATE `users` SET `user_name`='$name',`user_email`='$mail',`user_password`='$pass', `user_Mobile`='$mobile', `user_birth_date`='$birth_date', `is_admin`= $is_admin WHERE `user_id` = $id";
    $conn->exec($sql);
    
    if($_SESSION["user"]["is_admin"]){
        header("location: admin.php");
    }else {
        $_SESSION["user"]["user_name"] = $name;
        $_SESSION["user"]["user_password"] = $pass;
        $_SESSION["user"]["user_email"] = $mail;
        $_SESSION["user"]["user_Mobile"] = $mobile;
        $_SESSION["user"]["user_birth_date"] = $birth_date;
        $_SESSION["user"]["is_admin"] = $is_admin;
        header("location: homepage.php");
    }
?>