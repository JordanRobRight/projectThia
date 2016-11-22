<?php
// include database configuration file
include 'dbConfig.php';

// initialize shopping cart class
include 'cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $dbc->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="shopping.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
       #cart{
    font-size: 18px;
}
     @media screen and (max-width: 600px) {
    #cart tbody td .form-control{
        width:20%;
        display: inline !important;
    }
    .actions .btn{
        width:36%;
        margin:1.5em 0;
    }
    
    .actions .btn-info{
        float:left;
    }
    .actions .btn-danger{
        float:right;
    }
    
    table#cart thead { display: none; }
    table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
    table#cart tbody tr td:first-child { background: #870808; color: #fff; }
    table#cart tbody td:before {
        content: attr(data-th); font-weight: bold;
        display: inline-block; width: 8rem;
    }
    
    table#cart tfoot td{display:block; }
    table#cart tfoot td .btn{display:block;}
    
 </style>
    
</head>
<body>
<!-- Header Image -->
<div class="jumbotron-header"></div>
<!-- Navbar -->
<nav class="navbar navbar-default">
        <div class="container-nav">
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
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
<div class="col-lg-12 col-md-8 col-sm-10">
    <h1>Order Preview</h1>
    <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
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
            <td><?php echo $item["item_name"]; ?></td>
            <td><?php echo '$'.$item["price"];?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"]; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total(); ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    </div>
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon"></i> Continue Shopping</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon"></i></a>
    </div>


</div>
</body>
</html>