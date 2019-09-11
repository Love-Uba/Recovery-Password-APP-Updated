
<?php
	session_start();
	session_destroy();
	 echo "<h4>You have successfully logged out from your account</h4>";
    header('Refresh: 2;url=index.php');
	
?>