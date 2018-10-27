<?php 

if(isset($_POST['register'])){

	include_once'db.php';
$fname = $_POST['fullname'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

	$sql = "INSERT INTO user (`username`, `userpassword`, `fullname`, `address`, `contactno`) VALUES('".$username."','".$password."','".$fname."','".$address."','".$contact."')";

	mysqli_query($conn,$sql);

	header("Location: Login.php");
	exit();
	
}

?>