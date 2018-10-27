<?php include_once'header.php' ?>

<div class="container">
	
	<h1 class="display-4">Pizza List</h1><br>

	<div class="row">
		<div class="col-2">
			
		</div>

		<div  class="col-12">
				<form action="loadcart.php" method="POST">
					<label>Cookies & Cheese Pizza</label>
					<input type="text" name="cookies" value="Cookies & Cheese Pizza" hidden>
						<select name="size1" id="size1">
							<option value="9">"9"</option>
							<option value="11">"11"</option>
						</select>
							<select name="cheese1" id="cheese1" >
								<option value="mozarella">Mozarella</option>
							  	<option value="quickmelt">Quick-Melt</option>
						</select>
							<input type="text" name="quantity" id="qty1" placeholder="Quantity" >
							<input type="text" name="price" id="price1" placeholder="Price">
							<button type="submit" id="btn1" name="btn1">Add to Cart</button>
				</form>
		</div>

		<div class="col-12">	
					<label>Yummy Hotdog Pizza</label>
						<select name="size2" id="size2">
							<option value="9">"9"</option>
							<option value="11">"11"</option>
						</select>
							<select name="cheese" id="cheese2">
								<option value="mozarella">Mozarella</option>
							  	<option value="quickmelt">Quick-Melt</option>
							</select>
							<input type="text" name="quantity" id="qty2" placeholder="Quantity">
							<input type="text" name="price" id="price2" placeholder="Price">
							<button type="submit" id="btn2">Add to Cart</button>
		</div>

			<div class="col-12">
				
				<label>Yummy Ham Delight Pizza</label>
					<select name="size3" id="size3">
						<option value="9">"9"</option>
						<option value="11">"11"</option>
					</select>
						<select name="cheese" id="cheese3">
							<option value="mozarella">Mozarella</option>
						  	<option value="quickmelt">Quick-Melt</option>
						</select>
					<input type="text" name="quantity" id="quantity3" placeholder="Quantity">
					<input type="text" name="price" id="price3" placeholder="Price">

					<button type="submit" id="btn3">Add to Cart</button>

			</div>


			<div class="col-12">
				
				<label>Oreo Pina Pizza</label>
					<select name="size4" id="size4">
						<option value="9">"9"</option>
						<option value="11">"11"</option>
					</select>
						<select name="cheese" id="cheese4">
							<option value="mozarella">Mozarella</option>
						  	<option value="quickmelt">Quick-Melt</option>
						</select>
					<input type="text" name="quantity" id="quantity4" placeholder="Quantity">
					<input type="text" name="price" id="price4" placeholder="Price">
					<button type="submit" id="btn4">Add to Cart</button>

			</div>

				<div class="col-12">
				
				<label>Garden Express Pizza</label>
					<select name="size5" id="size5">
						<option value="9">"9"</option>
						<option value="11">"11"</option>
					</select>
						<select name="cheese" id="cheese5">
							<option value="mozarella">Mozarella</option>
						  	<option value="quickmelt">Quick-Melt</option>
						</select>
					<input type="text" name="quantity" id="quantity5" placeholder="Quantity">
					<input type="text" name="price" id="price5" placeholder="Price">
					<button type="submit" id="btn5">Add to Cart</button>

			</div>








<div class="modal" id="addmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<span data-dismiss="modal">X</span>
			</div>
				<div class=" modal-body">
						<div id="contents">
							
						</div>
				</div>
				<div class="modal-footer">
					
				</div>
			
		</div>
	</div>
	
</div>














	</div>

	
</div>



</body>
</html>
















</script>