<?php
// include database configuration file
include 'resources/dbConfig.php';

// initialize shopping cart class
include 'cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: menu.php");
}

// get customer details by session customer ID
echo $phone.$email.$name;
$query = @mysqli_query($dbc,"SELECT * FROM customers WHERE phone = $phone");
$custRow = @mysqli_fetch_assoc($query);

// set customer ID in session
$_SESSION['sessCustomerID'] = $custRow['id'];

// include header file
include 'resources/header.php';
?>

<div class="container">
<div class="col-lg-12 col-md-8 col-sm-10">
    <h1>Order Preview</h1>
    <div class="row">
      <div class="col-md-4">
        <h3>Delivery Information: </h3>
        <?php
        echo "<p>Name: $name <br />
        Address: $address $city $state $zip <br />
        Phone: $phone <br />
        Email: $email <br />" ?>
      </div>
      <div class="col-md-8">
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
                  <?php if($cart->total_items() > 0){?>
                  <td class="text-center"><strong>Total <?php echo money_format('%n', $cart->total()); ?></strong></td>
                  <?php } ?>
              </tr>
          </tfoot>
        </table>
      </div>
    </div>
    </div>
    <div class="footBtn">
        <a href="menu.php" class="btn btn-warning"><i class="glyphicon"></i> Continue Shopping</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon"></i></a>
    </div>

</div>
<?php
// include footer file
include 'resources/footer.php';
?>
