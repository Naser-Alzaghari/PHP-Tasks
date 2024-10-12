<?php
    session_start();
    include "conn.php";
    $email = $_POST['input_email'];
    $password = $_POST['input_password'];

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE user_email = '$email'");
    
    try {
        $stmt->execute();
        if($stmt->rowCount()>0){
            $user = $stmt->fetch();
            if($password == $user['user_password']){
                $date = date("Y/m/d");
                $id = $user['user_id'];
                $conn->exec("UPDATE `users` SET `date_last_login`='$date' WHERE `user_id` = $id");
                $user["date_last_login"]=$date;
                $_SESSION['user']=$user;
                if($user['user_id'] == 2){
                    header("location: admin.php");
                }else {
                    header("location: homepage.php");
                }
                
            } else {
                $_SESSION['error'] = "password is incorrect";
                header("location: login_page.php");
            }
        } else {
            $_SESSION['error'] = "no email found";
            header("location: login_page.php");
        }
        
    } catch (e){
    }
?>