<?php
    session_start();
    $name = $_REQUEST['name'];
    $passwd = $_REQUEST['password'];
    
    if($name == "admin" && $passwd == "admin123"){
        $_SESSION['auth'] = true;
        header('location:book-list.php');
    }else{
        header('location:..\admin\index.php');
    }
?>