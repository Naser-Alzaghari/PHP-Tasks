<?php
    session_start();
    include 'conn.php';
    $id = $_SESSION["user"]["user_id"];
    if($id==2){
        if(isset($_GET["id"])){
            $id = $_GET["id"];
        }
    }
    $sql = "DELETE FROM `users` WHERE `user_id` = $id";
    $conn->exec($sql);
    
    if($_SESSION["user"]["user_id"]==2){
        
        header('location: admin.php');
    } else {
        unset($_SESSION["user"]);
        header('location: index.php');
    }
    

?>