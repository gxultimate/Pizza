<?php 

if(isset($_POST['submitform'])){
	include_once'db.php';

session_start();

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$_SESSION['user'] = $_POST['user'];

	$sql = "SELECT * FROM user WHERE username = '".$user."' AND userpassword ='".$pass."' ";

	$query=mysqli_query($conn,$sql);

	if(mysqli_num_rows($query) == 1 )
	{
		header("Location: ordersample.php");
		exit();
	}
	else
	{
		header("Location: Login.php");
		exit();
	}






}





 ?>


