<?php
	session_start();
	$error = '' //declare a variable to use for error messaging

	if(isset($_POST['submit'])){
		if(empty($_POST['username'])){
			$error = 'Invalid Credentials. Please try again.';
		}
		else {
			//define the username and pass for the session
			$username = $_POST['username'];
			$password = $_POST['password'];
			//define database connection variable
			$connect = mysqli_connect("localhost","walle_siamAdmin","PAd1@VLOBP3R","walle_admins");
			//define query shell for sqlsrv_query question marks get replaced with values in array
			$authQuery = "SELECT * FROM admin WHERE password = ? AND username = ?";
			//define parameter array for query
			$authParam = array($username, $password);
			//using sqlsrv_query to define query treats user input as string and prevents sql injection
			$authExec = sqlsrv_query($connect, $authQuery, $authParam)

		}
	}
?>
