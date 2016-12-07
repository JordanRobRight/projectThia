<?php

if (isset($_SESSION['adminLogin'])) {
	$admin = true;
}

$curfile = basename($_SERVER["SCRIPT_FILENAME"], '.php');
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
		switch ($curfile) {
			case 'menuAdmin':
				$title = 'Menu Management';
				$menu = true;
				break;
			case 'orderAdmin':
				$title = 'Active Orders';
				$orders = true;
				break;
			case 'userAdmin':
				$title = 'Manage Users';
				$users = true;
				break;
			case 'orderDetail':
				$title = 'Order Details';
				$orders = true;
				break;
			default:
				$title = 'Siam Thai';
				break;
		}
		echo "<title>$title</title>"
		?>
		<!-- use free cdn to get fast page loads of latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<!-- include font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
     <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../resources/css/admin.css">
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
					<li<?php if ($orders){echo ' class="active"';} ?>><a href="orderAdmin.php">Orders</a></li>
					<li<?php if ($menu){echo ' class="active"';} ?>><a href="menuAdmin.php">Menu</a></li>
					<li<?php if ($users){echo ' class="active"';} ?>><a href="userAdmin.php">Users</a></li>
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
