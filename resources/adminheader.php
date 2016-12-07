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
			echo '<title>Siam Thai - Administration</title>';
		} else {
			echo '<title>Siam Thai</title>';
		}
		?>
		<!-- use free cdn to get fast page loads of latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<!-- include font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
     <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
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
				<a class="navbar-brand" href="../">Siam Thai</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="orderAdmin.php">Orders</a></li>
					<li><a href="menuAdmin.php">Menu</a></li>
					<li><a href="userAdmin.php">Users</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
					if ($admin) {
						echo '<li><a href="http://wall-e.uwmsois.com/siam/admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>';
					}
					 ?>
				</ul>
			</div>
		</div>
	</nav>
