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
<?php
// include header file
include '../resources/header.php';
?>

<div id="top">
<!-- Appetizers -->
<div id="appetizers" class="container products">
    <h1>Menu</h1>
    <h2>Appetizers</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category = 'APPETIZER'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!--Noodle Soups -->
<div id="noodlesoup" class="container products">
    <h2>Noodle Soups</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='NOODLESOUP'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Soup -->

<div id="soup" class="container products">
    <h2>Soup</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='SOUP'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo 'Small $'.$row["s_price"], '&nbsp; Large $'.$row["l_price"]; ?></p>
                            
                            
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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

<!-- Salad -->
<div id="salad" class="container products">
    <h2>Salads</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='SALAD'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Curry -->
<div id="curry" class="container products">
    <h2>Curry</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='CURRY'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Stir Fried Noodles -->
<div id="stirfry" class="container products">
    <h2>Stir-Fried Noodles</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='STIRFRY'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Entrees -->
<div id="entree" class="container products">
    <h2>Entrees</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='ENTREE'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Fried Rice -->
<div id="rice" class="container products">
    <h2>Fried Rice</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='FRIEDRICE'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Bevarages -->
<div id="beverage" class="container products">
    <h2>Beverages</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='BEVERAGE'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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
<!-- Dessert -->
<div id="dessert" class="container products">
    <h2>Dessert</h2>
    <div class="row list-group">
        <?php
        //get rows query
        $query = $dbc->query("SELECT * FROM Items WHERE category ='DESSERT'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["item_name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["item_description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["price"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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

</div>
<?php
// include footer file
include '../resources/footer.php';
?>
</body>
</html>