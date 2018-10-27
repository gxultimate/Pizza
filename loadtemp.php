<?php 

include'db.php';
include_once'session.php';

$user = $_SESSION['user'];
$pizzaname = $_POST['pizzaname'];
$size = $_POST['size1'];
$cheese = $_POST['cheese1'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$time = $_POST['time'];


$sql ="INSERT INTO temporder ( `pizzaname`, `temp_price`, `temp_dtime`, `temp_cheese`, `temp_size`, `temp_qty`, temp_userID ) VALUES ('".$pizzaname."','".$price."','".$time."','".$cheese."','".$size."','".$qty."','".$user."')";

mysqli_query($conn,$sql);

// echo json_encode($sql);


 ?>
