<?php
if(!isset($_REQUEST['id'])){
    header("Location: menu.php");
}

// include header file
include 'resources/header.php';
?>
<div id="status">
<div class="container">
    <h1>Payment</h1>
    <p id="success">Your order is almost complete! Please complete payment. Order ID is #<?php echo $_GET['id']; ?></p>
 </div>


<div id="paypal">  
<div class="col-lg-6 col-md-6 col-sm-12">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SNUJQ2X2QX62U">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>
 </div>
<?php
// include footer file
include 'resources/footer.php';
?>
