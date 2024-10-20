<?php
    session_start();
    include 'conn.php';
    $id=$_GET['id'];
    $sql="UPDATE `items` SET `is_deleted`= true WHERE `item_id` = :item_id";
    $statment = $conn->prepare($sql);
    $statment->bindParam('item_id',$id);
    $statment->execute();
    echo $id;
    header("location: admin.php");
?>