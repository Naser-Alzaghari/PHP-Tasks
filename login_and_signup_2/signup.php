<?php
    session_start();
    include "conn.php";
    $email = $_POST['input_email'];
    $mobile = $_POST['input_mobile'];
    $full_name = $_POST['input_full_name'];
    $password = $_POST['input_password'];
    $date_of_birth = $_POST['input_date_of_birth'];
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE user_email = '$email'");
    $date = date("Y/m/d");
    try{
        $stmt->execute();
        if($stmt->rowCount()==0){
            $h_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`, `user_Mobile`, `user_birth_date`, `date_created`, `date_last_login`) VALUES ('$full_name','$email','$h_password','$mobile','$date_of_birth','$date','$date')";
            $conn->exec($sql);
            echo "New record created successfully";
            $_SESSION['success']="New record created successfully";
            header("location: signup_page.php");
        } else {
            $_SESSION['error']="account already exist";
            header("location: signup_page.php");
        }
    } catch(e){

    }
?>