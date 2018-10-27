<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="./js/popper.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/notify.min.js"></script>
	<script src="./js/getcontent.js" type="text/javascript"></script>
	<script src="./js/loadval.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body id="deliverybody">




<div class="container">
	<div class="row">
		<div style="position: absolute; top: 15vh;">
			<form action="deletedelivery.php" method="POST">
				<input type="text" name="deleteinput" id="did" readonly>
			<input type="submit" name="deletebutton" value="Order Done">
			</form>
			
		</div>
		<div class="col-12" id="deliverytable">
		    <table class=" table table-striped my-4">
		    	<thead>
		    		<tr>
		    			<th>Pizza</th>
		    			<th>Cheese Type</th>
		    			<th>Size</th>
		    			<th>Quantity</th>
		    			<th>Price</th>
		    			<th>Customer Name</th>
		    			<th>Customer Number</th>
		    			<th>Customer Address</th>
		    			<th>Customer Username</th>
		    		</tr>
		    	</thead>
		    	<tbody id="myDeliveryTable">
		    		<?php 
                       include_once'db.php';
                       include_once'session.php';

                       $user = $_SESSION['user'];

                       $sql = "SELECT finalorder.orderPizza, finalorder.orderCheese,finalorder.orderSize,finalorder.orderQty,finalorder.orderPrice , user.fullname, user.contactno,user.address, user.username FROM finalorder INNER JOIN user on finalorder.orderName = user.username";
                       $query = mysqli_query($conn,$sql);

                       while ($data = mysqli_fetch_assoc($query)) {
                       	echo " <tr>
                       	<td>{$data['orderPizza']}</td>
                       	<td>{$data['orderCheese']}</td>
                       	<td>{$data['orderSize']}</td>
                       	<td>{$data['orderQty']}</td>
                       	<td>{$data['orderPrice']}</td>
                       	<td>{$data['fullname']}</td>
                       	<td>{$data['contactno']}</td>
                       	<td>{$data['address']}</td>
                       	<td>{$data['username']}</td>
                     	
                       	</tr>
                       	";
                       }

		    		 ?>
		    	</tbody>
		    </table>
		</div>
	</div>
</div>


<script>
	$(document).ready(function($) {
		
		$("#myDeliveryTable tr").click(function() {

			var data = $(this).find("td");

			$("#did").val(data.eq(8).html());
			
		});;

	});


</script>




</body>
</html>