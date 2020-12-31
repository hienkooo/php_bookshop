<?php
    include('C:\xampp\htdocs\store\admin\connect\config.php');
    include('C:\xampp\htdocs\store\admin\connect\auth.php');

    $sql = "SELECT books.*, categories.name
            FROM books LEFT JOIN categories
            ON books.category_id = categories.id
            ORDER BY books.created_date DESC";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Book List</h1>
    <ul class="menu">
        <li><a href="book-list.php">Manage Books</a></li>
        <li><a href="../admin/cat-list.php">Manage Categories</a></li>
        <li><a href="order.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <ul class="books">
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <li class="liststyle">
            <img class="pic" src="front\<?php echo $row['cover'] ?>"
            alt="" height="100px">
            <h1><b><?php echo $row['title'] ?></b></h1>
            <h3><i>by <?php echo $row['author'] ?></i></h3>
            <small>(in <?php echo $row['name'] ?>)</small>
            <span><?php echo $row['price'] ?>MMK</span>
            <div><?php echo $row['summary'] ?></div>
            <a href="book-del.php?id=<?php echo $row['id'] ?>" class="del">del</a>
            <a href="book-edit.php?id=<?php echo $row['id'] ?>">edit</a>
        </li>
        <?php }?>
    </ul>
    <a href="book-new.php" class="new">New Book</a>
   
</body>
</html>