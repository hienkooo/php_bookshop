<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Aaa123!@";
$dbname = "store";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)
 or die("Error while connection with mysqli server!");
 mysqli_select_db($conn,$dbname);
?>