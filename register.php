<?php
	include('conn.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$email=check_input($_POST['email']);
	$password=md5(check_input($_POST['password']));
	$first = check_input($_POST['first']);
	$last = check_input($_POST['last']);

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "Invalid email format";
  		header('location:signup.php');
	}

	else{

		$query=mysqli_query($conn,"select * from user where email='$email'");
		if(mysqli_num_rows($query)>0){
			$_SESSION['sign_msg'] = "Email already taken";
  			header('location:signup.php');
		}
		else{
		//depends on how you set your verification code
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 18);

		mysqli_query($conn,"insert into user (email, password,firstname,lastname, code) values ('$email', '$password','$first','$last', '$code')");
		$uid=mysqli_insert_id($conn);
		//default value for our verify is 0, means it is unverified
      $name = $first .' '.$last;
		//sending email verification
		$to = $email;
			$subject = "Sign Up Verification Code";
			$message = "
				<html>
				<head>
				<title>Verification Code</title>
				</head>
				<body>
				<h2>Thank you for Registering.</h2>
				<p>Dear ".$name." Your Account Detail is:</p>
				<p>Email: ".$email."</p>
				<p>Password: ".$_POST['password']."</p>
				<p>Please click the link below to activate your account.</p>
				<h4><a href='http://localhost/recoverypass/activate.php?uid=$uid&code=$code'>Activate My Account</h4>
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: ubadinmalove@gmail.com". "\r\n" .
						"CC: mcgamma04@yahoo.com";

		mail($to,$subject,$message,$headers);

		$_SESSION['sign_msg'] = "Verification code sent to your email. <h4><a href='http://localhost/recoverypass/activate.php?uid=$uid&code=$code'>Activate My Account</h4>";
  		header('location:signup.php');

  		}
	}
	}
?>