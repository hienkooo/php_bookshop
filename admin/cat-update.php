<?php
    include('C:\xampp\htdocs\store\admin\connect\config.php');
    $name = $_REQUEST['name'];
    $remark = $_REQUEST['remark'];
    $id = $_REQUEST['id'];
    $sql = "UPDATE categories SET name='$name',remark='$remark',
            created_date=now(),modified_date=now()
            WHERE id = $id";
    mysqli_query($conn,$sql);
    header("location:cat-list.php");

?>