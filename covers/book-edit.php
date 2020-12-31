<?php
    include('C:\xampp\htdocs\store\admin\connect\config.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id = $id ";
    $result =  mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Books Information</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form_control{
            display: block;
            font-size: 20px;
            margin-top: 10px;
        }
        input,summary{
            width: auto;
            height: 30px;
        }
        textarea{
            font-size: 20px;
            width: 280px;
            height: 120px;
        }
    </style>
</head>
<body>
    <h1>Edit Books</h1>
        <ul class="menu">
            <li><a href="book-list.php">Manage Books</a></li>
            <li><a href="../admin/cat-list.php">Manage Categories</a></li>
            <li><a href="order.php">Manage Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <form action="book-update.php" method="post" enctype="multipart/form-data">
        <input class="form_control" type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
        <label class="form_control" for="title">Title</label>
            <input class="form_control" type="text" name="title" id="title" value="<?php echo $row['title'] ?>">
        <label class="form_control" for="author">Author</label>
            <input class="form_control" type="text" name="author" id="author" value="<?php echo $row['author'] ?>">
        <label class="form_control" for="summary">Summary</label>
            <textarea  name="summary" id="summary"><?php echo $row['summary'] ?></textarea>
        <label class="form_control" for="price">Price</label>
            <input class="form_control" name="price" id="price" value="<?php echo $row['price'] ?>">
        <label for="Category">categories</label>
        <select class="form_control" name="category_id" id="categories">
            <option value="0">--Choose--</option>
            <?php 
                $categories = mysqli_query($conn,"SELECT id, name FROM categories");
                while($cat_id = mysqli_fetch_assoc($categories)){ 
            ?>
            <option class="form_control" value="<?php echo $cat_id['id'] ?>"
                    <?php if($cat_id['id'] == $row['category_id']) echo "selected" ?> >
                    <?php echo $cat_id['name'] ?>
            </option>
            <?php } ?>
         </select>
         <br><br>
         <div class="img-control">
            <img src="front/<?php echo $row['cover']; ?>" height="150">    
            <label class="form_control" for="cover">Change Cover</label>
            <input class="form_control" type="file" name="cover" id="cover">
            <br><br>
            <input class="form_control" type="submit" value="Update Book">
            <a class="form_control" href="book-list.php">Back</a>

         </div>
         
    </form>
</body>
</html>