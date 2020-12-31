<?php
    session_start();
    include("admin\connect\config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    mysqli_query($conn, "INSERT INTO orders
    (name, email, phone, address, status, created_time, modified_time)
    VALUES ('$name','$email','$phone','$address', 0, now(), now())");

    //take the auto increment ID value from last query
    $order_id = mysqli_insert_id($conn);

    foreach($_SESSION['cart'] as $id => $qty) {
    mysqli_query($conn, "INSERT INTO order_items( book_id, order_id, qty) 
                         VALUES ( '$id','$order_id','$qty')");
                         
    }
    unset($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>  
        <h1>Order Submitted</h1>
        <div class="msg">
            Your order has been submitted. We'll deliver the items soon.
            <a href="index.php" class="done">Book Store Home</a>
        </div>
        <div class="footer">
            &copy; <?php echo date("Y") ?>. All right reserved.
        </div>
</body>
</html>
