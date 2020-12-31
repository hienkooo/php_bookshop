<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Books</title>
</head>
<body>
<?php
    include('C:\xampp\htdocs\store\admin\connect\config.php');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $summary = $_POST['summary'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];
    if($cover){
        move_uploaded_file($tmp,"front/$cover");
    }
    $sql = "INSERT INTO books ( title , author , summary , 
            price , category_id , cover , created_date , modified_date )
            VALUES ('$title','$author','$summary','$price','$category_id','$cover',
            now(),now() )";
    mysqli_query($conn, $sql);
    header("location: book-list.php");
?>
    
</body>
</html>