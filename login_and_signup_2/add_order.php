<?php
    include "conn.php";
    session_start();
    $id = $_SESSION['order_id'];
    echo $id;
    echo $_POST['total_number_12'];
    print_r($_POST);
?>