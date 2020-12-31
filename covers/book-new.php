<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form label {
            display: block;
            margin-top: 8px;
            font-weight: bold;
            font-size: 1em;
        }
        .link_button{
            width: 90px;
            height: 20px;
            background-color: gray;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            color: cyan;
        }
        .control{
            width: 150px;
        }
        .control textarea{
            max-width: 150px 150px;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <h1>New Book</h1>
        <ul class="menu">
            <li><a href="book-list.php">Manage Books</a></li>
            <li><a href="../admin/cat-list.php">Manage Categories</a></li>
            <li><a href="order.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <form method="post" action="book-add.php" enctype="multipart/form-data">
            <label for="title" >Book Title</label>
                <input type="text" class="control" name="title" id="title">
            <label for="author">Author</label>
                <input type="text" class="control" name="author" id="author">
            <label for="summary">Summary</label>
                <textarea  name="summary" class="control" id="summary"></textarea>
            <label for="price">Price</label>
                <input type="text" class="control" name="price" id="price">
            <label for="categories">Category</label>
                <select class="control" name="category_id" id="categories">
                    <option value="0">--Choose--</option>
                    <?php
                        include('../admin/connect/config.php');
                        include('../admin/connect/auth.php');
                        $result = mysqli_query($conn,"SELECT id, name from categories");
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $row['id'] ?>">
                        <?php echo $row['name'] ?>
                    </option>
                    <?php }?>
                </select>
            <label  for="cover">Cover</label>
                <input type="file" name="cover" id="cover"><br><br>
            <input type="submit" value="Add Book">
            <a href="book-list.php" class="link_button">Back</a>
        </form>
    </div>
</body>
</html>