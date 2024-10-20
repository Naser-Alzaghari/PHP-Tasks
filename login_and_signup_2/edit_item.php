<?php
    $image = $_FILES['item_image']['name'];
    $tmep_image = $_FILES['item_image']['tmp_name'];
    $path = "./uploads".$image;
    move_uploaded_file($tmep_image,$path);
    include "conn.php";
    echo $image;
    if($image != ""){
        $sql = "UPDATE `items` SET `item_description`=:item_description,`item_image`=:item_image,`item_total_number`=:item_total_number WHERE `item_id` = :item_id";
        $statment = $conn->prepare($sql);
        $statment->bindParam('item_id',$_POST['item_id']);
        $statment->bindParam('item_description',$_POST['item_description']);
        $statment->bindParam('item_image',$path);
        $statment->bindParam('item_total_number',$_POST['item_total_number']);
        $statment->execute();
        header("location: admin.php");
    } else {
        $sql = "UPDATE `items` SET `item_description`=:item_description,`item_total_number`=:item_total_number WHERE `item_id` = :item_id";
        $statment = $conn->prepare($sql);
        $statment->bindParam('item_id',$_POST['item_id']);
        $statment->bindParam('item_description',$_POST['item_description']);
        $statment->bindParam('item_total_number',$_POST['item_total_number']);
        $statment->execute();
        header("location: admin.php");
    }
    
?>