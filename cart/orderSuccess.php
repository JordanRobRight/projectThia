<?php
if(!isset($_REQUEST['id'])){
    header("Location: menu.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success</title>
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
<div id="status">
<div class="container">
    <h1>Order Status</h1>
    <p id="success">Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>
</div>
    </div>
<?php
// include footer file
include '../resources/footer.php';
?>
</body>
</html>