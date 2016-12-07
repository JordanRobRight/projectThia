<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $scriptname = basename($_SERVER['SCRIPT_FILENAME'], ".php");
  
  switch ($scriptname) {
    case 'index':
      $title = 'Welcome to Siam Thai';
      break;
    case 'about':
      $title = 'About Siam Thai';
      break;
    case 'menu':
      $title = 'Siam Thai Menu';
      break;
    case 'contact':
      $title = 'Contact Us';
      break;
    default:
      $title = 'Siam Thai';
    }
    echo "<title>$title</title>\r\n";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- use free cdn to get fast page loads of latest compiled and minified css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- include font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
     <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
</head>
<body>

<!-- Header Image -->
<div class="jumbotron-header"></div>
<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="menu.php">Full Menu</a></li>
                    <li><a href="menu.php#appetizers">Appetizers</a></li>
                    <li><a href="menu.php#noodlesoup">Noodle Soups</a></li>
                    <li><a href="menu.php#soup">Soups</a></li>
                    <li><a href="menu.php#salad">Salad</a></li>
                    <li><a href="menu.php#curry">Curry</a></li>
                    <li><a href="menu.php#stirfry">Stir-Fried Noodles</a></li>
                    <li><a href="menu.php#entree">Entrees</a></li>
                    <li><a href="menu.php#stirfry">Stir-Fried Noodles</a></li>
                    <li><a href="menu.php#rice">Fried Rice</a></li>
                    <li><a href="menu.php#beverage">Beverages</a></li>
                    <li><a href="menu.php#dessert">Desserts</a></li>
                </ul>
              </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
                
        <ul class="nav navbar-nav navbar-right">
            <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
    </div>
</nav>
