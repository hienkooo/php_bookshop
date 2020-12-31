<?php
    include('C:\xampp\htdocs\store\admin\connect\config.php');
    $id = $_REQUEST['id'];
    mysqli_query($conn,"DELETE FROM categories WHERE id = $id");
    header("location:cat-list.php");
?>