<?php
// initialize shopping cart class

include 'cart.php';
$cart = new Cart;

// include header file
include 'resources/header.php';

?>
 
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
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="menu.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total(); ?></strong></td>
            <td><a href="checkout.php" class="btn btn-success">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>

</div>
<?php
// include footer file
include 'resources/footer.php';
?>


