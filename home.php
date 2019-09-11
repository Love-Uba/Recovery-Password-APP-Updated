<!DOCTYPE html>
<html>
<head>
	<title>Password Recovery App</title>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+San">
	<link href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">  
</head>
<body>
	<div class="container">
		<!--<h2>Ubadinma Love App</h2>-->
		<?php
		session_start();
	include('conn.php');
$name = '';
	if(isset($_SESSION['id'])){
		$uiserid = $_SESSION['id'];
		$query=mysqli_query($conn,"select * from user where userid='$uiserid'");
		$row=mysqli_fetch_array($query);
		$name = $row['firstname'].' '.$row['lastname'];
		
	}
		?>
		<h2 style="text-align:center;">Welcome <span style="color:blue; font-weight:bold;"> <?php echo $name;  ?></span> This is Recovery Password Demonstration.</h2>
		<p style="text-align:right;font-size:16px;">You can click here to Log out <a href="logout.php">Logout</a></p>
	
	
	<div><img src="images/welcome.gif" width="1000px"></div>
	</div>
</body>
</html>