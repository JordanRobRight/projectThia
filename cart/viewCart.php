<?php
// initialize shopping cart class

include 'cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="shopping.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <script>
    function updateCartItem(obj,item_id){
        $.get("cartAction.php", {action:"updateCartItem", item_id:item_id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
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
            <li><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#appetizers">Appetizers</a></li>
                    <li><a href="#noodlesoup">Noodle Soups</a></li>
                    <li><a href="#soup">Soups</a></li>
                    <li><a href="#salad">Salad</a></li>
                    <li><a href="#curry">Curry</a></li>
                    <li><a href="#stirfry">Stir-Fried Noodles</a></li>
                    <li><a href="#entree">Entrees</a></li>
                    <li><a href="#stirfry">Stir-Fried Noodles</a></li>
                    <li><a href="#rice">Fried Rice</a></li>
                    <li><a href="#beverage">Beverages</a></li>
                    <li><a href="#dessert">Desserts</a></li>
                </ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
                
        <ul class="nav navbar-nav navbar-right">
            <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
    </div>
</nav>
 
<div class="container">
    <h1>Shopping Cart</h1>
    <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width: 50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width: 8%">Quantity</th>
            <th style="width: 22%">Subtotal</th>
            <th style="width: 10%">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td data-th="Item"><?php echo $item["item_name"]; ?></td>
            <td data-th="Price"><?php echo '$'.$item["price"]; ?></td>
            <td data th="Quantity"><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td data-th="Subtotal"><?php echo '$'.$item["subtotal"]; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&item_id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total(); ?></strong></td>
            <td><a href="checkout.php" class="btn btn-success">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</body>
</html>