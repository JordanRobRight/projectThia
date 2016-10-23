<?php
	include("/home/walle/public_html/siam/resources/config.php");
	session_start();
	$error = ''; //declare a variable to use for error messaging

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST['username']) || empty($_POST['password'])) {
			$error = 'Invalid Credentials. Please try again.';
		} else {
			//define the username and pass for the session
			$username = $_POST['username'];
			$password = sha1($_POST['password']);

			$check = $admindb->prepare("SELECT username, password FROM user WHERE username=? && password=?");

			$check->bind_param("ss", $username, $password);

			$check->execute();

			$check->bind_result($username, $password);

			$print = $check->fetch();

			$check->close();

			if ($print)
			{
    		//redirect to different page for the message
    		$_SESSION['adminLogin'] = $username;
     		header('Location: dashboard.php');
     		exit;
			}
			else {
				$error = "Invalid Credentials. Please try again.";
			}
			mysqli_close($connect);
		}
	}
?>
