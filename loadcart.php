<?php 
include_once'db.php';

if(isset($_POST['btn1'])){


$temppizza = $_POST['cookies'];
$tempprice = $_POST['price'];

$sql = "INSERT INTO temporder (temp_pizzaName,temp_Price) VALUES ('".$temppizza."', ".$tempprice.")";

mysqli_query($conn,$sql);

}





 ?>