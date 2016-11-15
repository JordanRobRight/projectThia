<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" src="shopping.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    #container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    /*!
 * Start Bootstrap - Shop Homepage (http://startbootstrap.com/)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

    </style>
</head>
<body>
<div class="jumbotron jumbotron-header"></div>
<!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
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
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
<div class="container">
    <h1>Menu</h1>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM products ORDER BY id");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-8">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>