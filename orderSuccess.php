<?php
if(!isset($_REQUEST['id'])){
    header("Location: menu.php");
}

// include header file
include 'resources/header.php';
?>
<div id="status">
<div class="container">
    <h1>Order Status</h1>
    <p id="success">Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
</div>
    </div>
<?php
// include footer file
include 'resources/footer.php';
?>
