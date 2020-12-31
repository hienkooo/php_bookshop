<?php
    session_start();
    if(!isset($_SESSION['auth'])){
    header('location:C:\xampp\htdocs\store\index.php');
    exit();
    }
?>