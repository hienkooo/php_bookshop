<?php
    session_start();
    include('admin/connect/config.php');

    $cart = 0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $qty){
            $cart += $qty;
        }
    }
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
        $books = mysqli_query($conn, "SELECT * FROM books WHERE category_id = $cat_id");

    }else{
        $books = mysqli_query($conn, "SELECT * FROM books");
    }

    $cats = mysqli_query($conn,"SELECT * FROM categories");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Bookstore</title>
</head>
<body>
    <h1>Book Store</h1>
    <div class="info">
        <a href="view-cart.php">Books in your cart.</a>
        <?php echo $cart; ?>
    </div>

    <div class="sidebar">
        <ul class="cats">
            <li>
                <b><a href="index.php">All Categories</a></b>
            </li>
            <?php while($row = mysqli_fetch_assoc($cats)) {?>
            <li>
                <a href="index.php?cat=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="main">
        <ul class="books">
            <?php while($rows = mysqli_fetch_assoc($books)){ ?>       
                <li>
                    <img src="covers/front/<?php echo $rows['cover'] ?>" height="100">
                    <b>
                        <a href="book-detail.php?id=<?php echo $rows['id'] ?>">
                            <?php echo $rows['title'] ?>
                         </a>
                    </b>
                    <i>
                       $<?php echo $rows['price'] ?>
                    </i>
                    <a href="add-to-cart.php?id=<?php echo $rows['id'] ?>">
                        Add to Cart
                    </a>
                    
                </li>
            <?php } ?>
        </ul>
       </div>
       <div class="footer">
            &copy; <?php echo date("Y") ?>. All right reserved.
        </div>
</body>
</html>
</body>
</html>