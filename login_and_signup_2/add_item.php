<?php
include "conn.php";
    $name = $_POST['item_description'];
    $file_image=$_FILES['item_image']['name'];
    $tempname=$_FILES['item_image']['tmp_name'];
    echo $file_image;
    $total_num = $_POST['item_total_number'];
    $path="./uploads/".$file_image;
    move_uploaded_file($tempname, $path);
    $sql = "INSERT INTO `items`(`item_description`, `item_image`, `item_total_number`) VALUES (:item_description,:item_image,:item_total_number)";
    $statment = $conn->prepare($sql);
    $data=[
        'item_description' => $name,
        'item_image' => $path,
        'item_total_number' => $total_num, 
    ];
    $statment -> execute($data);
    header("location: admin.php");
?>