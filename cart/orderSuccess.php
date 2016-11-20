<?php
if(!isset($_REQUEST['item_id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Order Success</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['item_id']; ?></p>
</div>
</body>
</html>