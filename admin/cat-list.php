<?php include('C:/xampp/htdocs/store/admin/connect/auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <style>
        .new{
            display: inline-block;
            background-color: blue;
            width: 90px;
            height: 25px;
            text-align: center;
            border-radius: 80px;
            margin-left:100px;
            text-decoration: none;

        }
        .del{
            text-decoration: none;
        }

    </style>
</head>
<body>
    <h1>Category List</h1>
        <ul class="menu">
            <li><a href="../covers/book-list.php">Manage Books</a></li>
            <li><a href="cat-list.php">Manage Categories</a></li>
            <li><a href="../covers/order.php">Manage Orders</a></li>
            <li><a href='../covers/logout.php'>Logout</a></li>
        </ul>
    <?php
        include('C:/xampp/htdocs/store/admin/connect/config.php');
        $result = mysqli_query($conn, "SELECT * FROM categories");
    ?>
    <ul>
        <?php while($row = mysqli_fetch_assoc($result)){  ?>   
            <li title="<?php echo $row['remark'] ?>">  
                <blockquote>
                    [<a href="cat-delete.php?id=<?php echo $row['id'] ?>" class="del">del</a>]
                    <?php echo $row['name']  ?>
                    [<a href="cat-edit.php?id=<?php echo $row['id'] ?>" class="del">edit</a>]
                </blockquote>
            </li>
            <?php } ?>
    </ul>
    <a href="cat-new.php" class="new">Add New</a>
</body>
</html>