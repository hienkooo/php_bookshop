<?php
    include('connect\config.php');
    $id = $_REQUEST['id'];
    $reslut = mysqli_query($conn,"SELECT * FROM categories WHERE id = $id");
    $row = mysqli_fetch_assoc($reslut);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <style>
        .control{
            display:block;
            width: 250px;
        }
        .new{
           height: 300px;
        }
        </style>
</head>
<body>
    <h1>Edit Category</h1>
        <ul class="menu">
            <li><a href="../covers/book-list.php">Manage Books</a></li>
            <li><a href="cat-list.php">Manage Categories</a></li>
            <li><a href="../covers/order.php">Manage Orders</a></li>
            <li><a href="../covers/logout.php">Logout</a></li>
        </ul>

        <form action="cat-update.php" method="post">
           <input type="hidden" name="id" value="<?php echo $row['id'] ?>"> 
           <label for="name">Category Name</label>
           <input type="text" class="control" id="name" name="name" value="<?php echo $row['name'] ?>">
           <label for="name">Category Remark</label>
           <textarea name="remark" class="control new" id="remark">
               <?php echo $row['remark'] ?>
           </textarea>
           <input type="submit" value="Update Category">
        </form>
</body>
</html>