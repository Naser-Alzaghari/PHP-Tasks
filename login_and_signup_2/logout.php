<?php
    session_start();
    unset($_SESSION["user"]);
    header('location: login_page.php');
?>