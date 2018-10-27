<?php 
include_once'db.php';


$user = $_POST['deleteinput'];

if(isset($_POST['deletebutton'])){
$sql= "DELETE FROM finalorder WHERE orderName = '".$user."'";

mysqli_query($conn,$sql);

header("Location: Delivery.php");
exit();

}

 ?>