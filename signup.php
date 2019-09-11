<!DOCTYPE html>
<html>

		<head>
		<title>Password Recovery App</title>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+San">
		<link href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">  

<style>
	#signup_form{
		width:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<body>
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span>Register</center></h2>
		<hr>
		<form method="POST" action="register.php">
		First-name: <input type="text" name="first" class="form-control" required>
		<div style="height: 10px;"></div>
		Last-name: <input type="text" name="last" class="form-control" required>
		<div style="height: 10px;"></div>
		Email: <input type="text" name="email" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Sign Up</button> <a href="index.php"> Back to Login</a>
		</form>
		<?php
			session_start();
			if(isset($_SESSION['sign_msg'])){
				?>
				<div style="height: 40px;"></div>
				<div class="alert alert-danger">
					<span><center>
					<?php echo $_SESSION['sign_msg'];
						unset($_SESSION['sign_msg']); 
					?>
					</center></span>
				</div>
				<?php
			}
		?>
		
	</div>
</div>
</body>
</html>