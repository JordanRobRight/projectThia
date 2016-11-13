<?php

if (isset($_SESSION['adminLogin'])) {
	$admin = true;
}
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- changing this part can break compatibility and responsiveness in older browsers -->
		<?php
		if ($admin) {
			echo '<title>Siam Thai - Administrator</title>';
		} else {
			echo '<title>Siam Thai</title>';
		}
		?>
		<!-- use free cdn to get fast page loads of latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<style>
		/*make space for bootstrap navbar if using fixed nav*/
		/* Margin bottom by footer height*/
			/*body {
				padding-top: 50px;
				margin-bottom: 60px;
			}*/
			form {
				margin: 10px; /*ensure form maintains margins on all screens*/
			}
			.btn {
				margin-top: 15px;
			}
			footer {
				position: relative;
				bottom: 0;
				width: 100%;
				height: 60px;  /* Set the fixed height of the footer here */
				background-color: #f5f5f5;
                text-align: center;
			}
			.text-muted{
					text-align: center;
					padding-top: 20px;
			}
		</style>
	</head>
	<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Siam Thai</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#">Menu</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Order</a></li>
					<li><a href="#">Chart</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
					if ($admin) {
						echo '<li><a href="http://wall-e.uwmsois.com/siam/admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>';
					} else {
						echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
						echo '<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
					}
					 ?>
				</ul>
			</div>
		</div>
	</nav>
