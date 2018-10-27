<?php include_once'header.php' ?>
<?php include_once'session.php'; ?>
<div class="container" id="container">
	<br>
	<div class="card-deck">
		
				<div class="card border border-dark">
					<div class="card-header">
						<h6>Cookies & Cheese Pizza</h6>						
					</div>
					<div class="card-body">
						
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>

											
					</div>
				</div>
					<div class="card border border-dark">
						<div class="card-header">
							 <h6>Yummy Hotdog Pizza</h6>
						</div>
							<div class="card-body">
									
							</div>
							<div class="card-footer">
							<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
							
							</div>
					</div>
								<div class="card border border-dark">
									<div class="card-header">
										 <h6>Ham Delight Pizza</h6>
									</div>
									<div class="card-body">
									
									</div>
									<div class="card-footer">
										<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
		
									</div>
								</div>
									<div class="card border border-dark">
										<div class="card-header">
											<h6>Oreo Pina Pizza</h6>
										</div>
										<div class="card-body">
							
										</div>
											<div class="card-footer">
												<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
												
											</div>
									</div>
										<div class="card border border-dark">
											<div class="card-header">
											 <h6>Garden Express Pizza</h6>
											</div>
											<div class="card-body">
											</div>
												<div class="card-footer">
													<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
												
												</div>
										</div>

										<div class="card border border-dark">
											<div class="card-header">
												<h6>Vegetarian Pizza</h6>
											</div>
											<div class="card-body">
											</div>
											<div class="card-footer">
												<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
											</div>
										</div>

			</div><br>
			<div class="card-deck">

				<div class="card border border-dark">
					<div class="card-header">
						<h6>Tuna Garlic Pizza</h6>
					</div>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
					</div>
				</div>
				<div class="card border border-dark">
					<div class="card-header">
						<h6>Ham & Egg Pizza</h6>
					</div>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
					</div>
				</div>
				<div class="card border border-dark">
					<div class="card-header">
						<h6>All Hungarian Pizza</h6>
					</div>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
					</div>
				</div>
					<div class="card border border-dark">
					<div class="card-header">
						<h6>All Peperoni Pizza</h6>
					</div>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
					</div>
				</div>
				<div class="card border border-dark">
					<div class="card-header">
						<h6>Beff Peperoni Pizza</h6>
					</div>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
					</div>
				</div>
				<div class="card border border-dark">
					<div class="card-header">
						<h6>Beef & Mushroom Pizza</h6>
					</div>
					<div class="card-body">
					</div>
					<div class="card-footer">
						<button type="button" data-toggle="modal" data-target="#addmodal" class="btn btn-md btn-success col-12">Order</button>
					</div>
				</div>
				
			</div>
	</div>
</div>
	



		<div class="modal fade" id="addmodal">
			<div class="modal-dialog">
			<div class="modal-content bg-success">
			<div class="modal-header p-4">
				<span data-dismiss="modal">X</span>
				
			</div>
			<div class="modal-body">
				<form  method="POST">
					<div class="col-8">
						<input type="text" name="pizzaname" id="pizzaname" class="pizzaname col-12" readonly>
						<select name="size1" id="size1" class="pizzaSize p-2 my-2">
							<option value="9">"9"</option>
							<option value="11">"11"</option>
						</select>
						<select name="cheese1" id="cheese1" class="cheeseType ml-3 p-2 my-2">
							<option value="mozarella">Mozarella</option>
						  	<option value="quickmelt">Quick-Melt</option>
						</select>
					</div><br>			
					<input type="text" name="qty" class="qty col-3 ml-3 p-2" id="qty" placeholder="Quantity" >
					<input type="text" name="price" class="price1 col-3 ml-2 p-2"  id="price1" placeholder="Price">
					<input type="text" name="time" class="time col-4 ml-2 p-2"  id="time1" placeholder="Delivery Time">		
					<input type="button" name="addcart" id="submit" value="Add To Cart" class="addcart btn btn-danger col-12 ml-1 my-4">
				</form>
						
						
				
			</div>
			<div class="modal-footer p-2">
			
			</div>
			</div>
			</div>
		</div>



<script>
	$(document).ready(function($) {
	

		$('#submit').click(function(event) {

			var data = JSON.parse(JSON.stringify($(this).parent('form').serialize()));

			$.post('loadtemp.php', data, function(_data, textStatus, xhr) {

				$.notify("Added to Cart" , {position: "top center", className: "success"});
				
				// var get = JSON.parse(_data);

				// alert(JSON.stringify(JSON.parse(_data)));
			
			});

			
		});


	});
</script>

