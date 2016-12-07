<?php
	include("../resources/dbConfig.php");
	session_start();
	$error = ''; //declare a variable to use for error messaging
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST['username']) || empty($_POST['password'])) {
			$error = 'Invalid Credentials. Please try again.';
		} else {
			//define the username and pass for the session
			$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
			$password = sha1(filter_var($_POST['password'],FILTER_SANITIZE_STRING));

			$check = $admindb->prepare("SELECT id, username, password FROM user WHERE username=? && password=?");

			$check->bind_param("sss", $uid, $username, $password);

			$check->execute();

			$check->bind_result($uid, $username, $password);

			$print = $check->fetch();

			$check->close();

			if ($print)
			{
    		//redirect to different page for the message
    		$_SESSION['adminLogin'] = $uid.$username;
     		header('Location: dashboard.php');
     		exit();
			}
			else {
				$error = "Invalid Credentials. Please try again.";
			}
			mysqli_close($admindb);
		}
	}
?>
