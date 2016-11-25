<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="shopping.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
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
            <li><a href="http://wall-e.uwmsois.com/siam/Main/index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php">Full Menu</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#appetizers">Appetizers</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#noodlesoup">Noodle Soups</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#soup">Soups</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#salad">Salad</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#curry">Curry</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#stirfry">Stir-Fried Noodles</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#entree">Entrees</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#stirfry">Stir-Fried Noodles</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#rice">Fried Rice</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#beverage">Beverages</a></li>
                    <li><a href="http://wall-e.uwmsois.com/siam/cart/index.php#dessert">Desserts</a></li>
                </ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
                
        <ul class="nav navbar-nav navbar-right">
            <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
    </div>
</nav>
