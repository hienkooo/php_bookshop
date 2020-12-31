<?php
    include('C:\xampp\htdocs\store\admin\connect\config.php');
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM books WHERE id = $id";
    mysqli_query($conn,$sql);
    header("location:book-list.php");

?>