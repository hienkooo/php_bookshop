<?php include("connect\auth.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<style>
    form label {
        display: block;
        margin-top: 8px;
        }
    #name{
        width: 175px;
        }

</style>
<body>
    <ul class="menu">
            <li><a href="../covers/book-list.php">Manage Books</a></li>
            <li><a href="cat-list.php">Manage Categories</a></li>
            <li><a href="../covers/order.php">Manage Orders</a></li>
            <li><a href="../covers/logout.php">Logout</a></li>
    </ul>
    <form action="cat-add.php" method="post">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name">

        <label for="remark">Remark</label>
        <textarea name="remark" id="remark"></textarea>

        <br><br>
        <input type="submit" value="Add Category">
    </form>

</body>

</html>