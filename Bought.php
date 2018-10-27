<?php include_once'header.php' ?>
<?php include_once'session.php'; ?>
<div class="container">
	
	<div class="row my-4">
		<div class="col-12" id="ordertable">
				<table class="table table-striped my-5 "  >
				<thead>
					<tr>
						<th>Customer</th>
						<th>PizzaName</th>
						<th>Quantity</th>
						<th>Price</th>
					
					</tr>
				</thead>
				<tbody id="tempcontenttable">
					<tr>
					<?php 
					include_once'db.php';
					include_once'session.php';
					$user = $_SESSION['user'];
			
					$sql= "SELECT * FROM temporder WHERE temp_userID = '".$user."'";
			
					$query = mysqli_query($conn,$sql);
			
					while($data = mysqli_fetch_assoc($query)){
					echo "<tr>
						<td>{$data['temp_userID']}</td>
						<td>{$data['pizzaname']}</td>
						<td>{$data['temp_qty']}</td>
						<td class='price'>{$data['temp_price']}</td>
			
			
					</tr>";	
			
			
			
			
					}
					 ?>
					</tr>
				</tbody>
			</table>
			</div>
			<div class="" style="position: absolute; left: 150vh; top: 70vh;">
				<input type="text" name="total" class="p-2 col-12" id="total" style="position: absolute; left:8vh; top:8vh; "><br><br><br><br><br>
				<div class="col-12">
					<input type="button" name="submit" value="Buy"  id="buy" class="btn btn-success col-12 btn-lg my-4">
				</div>
			</div>

				<div id="try">
					
				</div>
		
		</div>

</div>

<script>

$(document).ready(function($) {


  $('.price').each(function() {
        calculateSum();

    });


function calculateSum(){

	var sum = 0;

	$(".price").each(function() {
	    var value = $(this).text();
	    if(!isNaN(value) && value.length != 0) {
	        sum += parseFloat(value);
	    }

	});
	$('#total').val(sum);
}	
	
	});



</script>

<script>

$(document).ready(function($) {
			
$('#buy').click(function(event) {

	$.post('buy.php', function(data, textStatus, xhr) {
		$.notify("Please Wait for your Delivery" , {position: "top center", className: "success"});
	});
		
		// $.post("buy.php", function() {
		// 	$.notify("Added to Cart" , {position: "top center", className: "success"});
		// });
			// alert("DATA:" +data);
			
				// alert(JSON.stringify(JSON.parse(_data)));
		

	    // $.get("demo_test.asp", function(data, status){
	    //     alert("Data: " + data + "\nStatus: " + status);
	    // });
	// });
			// $.notify("Added to Cart" , {position: "top center", className: "success"});
	// }
	// });

});




	});
</script>