<?php include_once'session.php'; ?>

<!DOCTYPE html>
<html>
<head>
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
	<title>Alberto's Pizza</title>

</head>
<body id="bodyid">

	<div class="container">
		<div class="row">
				<div class="col-12">
				<form action="user.php" method="POST">
					<div class="container">
						<div class="row">
								<div class="col-12 my-2 " style="text-align: center; top: 10vh;">
									<img src="./css/albertos.jpg" alt="albertoslogo">
									<div class="col-12 ">
										<input type="text" name="user" class="p-3 my-2" placeholder="Username">
									</div>
									<div class="col-12 ">
										<input type="text" name="pass" class="p-3 my-2" placeholder="Password">
									</div>
									<div class="col-8 btn-group" id="btns" style="align-content: center;">
										<input type="submit" name="submitform" value="Login" class=" col-2  my-2 btn btn-lg btn-outline-dark">
										<input type="button" name="register" value="Register" data-toggle="modal" data-target="#registermodal" class=" col-2  my-2 btn btn-lg btn-outline-dark">
									</div>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>

<div class="modal fade" id="registermodal">
	<div class="modal-dialog" id="moddia">
		<div class="modal-content" id="modcont">
			<div class="modal-header py-4">
					<h4>Registration</h4>
				<span data-dismiss="modal">X</span>
			
			</div>
			<div class="modal-body">
				<div class="container" style="text-align: center;">
					<div class="row">

						<div class="col-12">
							<form action="registration.php" method="POST">
								<div>
									<input type="text" name="fullname" placeholder="Full Name" class="my-1 p-2 col-8">
								</div>
								<div>
									<input type="text" name="contact" placeholder="Contact Number" class="my-1 p-2 col-8">
								</div>
								<div>
									<input type="text" name="address" placeholder="Delivery Address" class="my-1 p-2 col-8">
								</div>
								<div>
									<input type="text" name="username" placeholder="Username" class="my-1 p-2 col-8">
								</div>
								<div>
									<input type="password" name="password" placeholder="Password" class="my-1 p-2 col-8">
								</div>
								<div>
									<input type="submit" name="register" value="Register" class="btn my-2 p-3 text-lg-centers col-8 btn-success btn-outline-dark">
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				
			</div>
		</div>
		
	</div>
	
</div>



</body>
</html>   