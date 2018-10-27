<?php 
include_once'db.php';
include_once'session.php';

$user = $_SESSION['user'];


$sql = "SELECT * FROM temporder WHERE temp_userID = '".$user."'";

$query = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($query)) {
	$userid = $data['temp_userID'];
	$pizza = $data['pizzaname'];
	$qty = $data['temp_qty'];
	$price = $data['temp_price'];
	$size = $data['temp_size'];
	$cheese = $data['temp_cheese'];

	$sql2 ="INSERT INTO finalorder (`orderName`, `orderPizza`, `orderQty`, `orderPrice`, `orderSize`, `orderCheese`) VALUES('".$userid."','".$pizza."','".$qty."','".$price."','".$size."','".$cheese."')";
	mysqli_query($conn,$sql2);

	$sql3 = "DELETE FROM temporder WHERE temp_userID = '".$user."'";
	mysqli_query($conn,$sql3);

}
	// while ($data = mysqli_fetch_assoc($query)) {

	// 	$userid = $data['temp_userID'];
	// 	$pizza = $data['pizzaname'];
	// 	$qty = $data['temp_qty'];
	// 	$price = $data['temp_price'];
	// 	$size = $data['temp_size'];
	// 	$cheese = $data['temp_cheese'];

		

	// 	// echo "json_encode($data)";
	// 	mysqli_query($conn,$sql2);

	// 	// $sql3 = "DELETE FROM temp_order WHERE temp_userID = '".$user."'";
	// 	// mysqli_query($conn,$sql3);

	// }


// echo json_encode($sql3);



 ?>