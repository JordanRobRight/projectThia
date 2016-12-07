<?php
require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
include("../resources/dbConfig.php");
include("../resources/adminheader.php");

if ($_SERVER['REQUEST_METHOD'] == GET) {
  if (isset($_GET['oid'])) {
    $orderid = filter_var($_GET['oid'], FILTER_SANITIZE_NUMBER_INT);
  }
}

$q = "SELECT * FROM orders WHERE id = $orderid and status = 1";
$check = @mysqli_query($dbc,$q);
$results = @mysqli_num_rows($check);

if (!$results) {
  $error = true;
}

$query = 'SELECT o.id, DATE_FORMAT(o.created,\'%h:%i %p %b-%e\') AS created, c.name, c.phone, c.address, c.city, c.state, ocq.total_items FROM
	(SELECT oiq.order_id, SUM(oiq.theCount * oiq.quantity) AS total_items FROM
		(SELECT order_id, quantity, COUNT(id) AS theCount FROM order_items GROUP BY order_id, quantity) AS oiq GROUP BY oiq.order_id)
	AS ocq
JOIN orders o ON o.id = ocq.order_id
JOIN order_items oi ON ocq.order_id = oi.order_id
JOIN customers c ON c.id = o.customer_id
WHERE o.id = '.$orderid.'
group by o.id';

$order = @mysqli_query($dbc,$query);
if ($order) {
  $ordinfo = @mysqli_fetch_array($order, MYSQLI_ASSOC);
  $num = $ordinfo['id'];
  $recd = $ordinfo['created'];
  $cusnm = ucWords(strtolower($ordinfo['name']));
  $ordsz = ucWords(strtolower($ordinfo['total_items']));
  $cusadd = $ordinfo['address'];
  $cuscsz = ucWords(trim($ordinfo['city'].' '.$ordinfo['state'].' '.$ordinfo['zip']));
  $cusphone = $ordinfo['phone'];
} else {
  $error =true;
}

$itemq = 'select oi.quantity, ifnull(oi.size,\'\') as size, i.item_name
from order_items oi join Items i on oi.item_id = i.item_id
where oi.order_id ='.$orderid;

$getitems = @mysqli_query($dbc,$itemq);

echo '<div class="container">';

if ($error) {
  echo '<div class="alert alert-danger">No active orders found for that id. Click <a href="orderAdmin.php">here</a> to return to the order summary page</div>';
  exit();
} else {

  echo '<h2>Order Details - Order #'.$num.'</h2>
  <a href="orderAdmin.php" class="btn btn-sm btn-warning">Back to View Orders<span class="glyphicon glyphicon-new-window></span>"</a>
  <a href="completeOrder.php?oid='.$orderid.'" class="btn btn-sm btn-success pull-right">Complete Order <span class="glyphicon glyphicon-ok-sign"></span></a>
  <dl class="order-detail-list">
    <dt>Order Placed:</dt>
    <dd>'.$recd.'</dd>
    <dt>Customer Name:</dt>
    <dd>'.$cusnm.'</dd>
    <dt>Customer Address:</dt>
    <dd>'.$cusadd.'<br />'.$cuscsz.'</dd>
    <dt>Customer Phone:</dt>
    <dd>'.$cusphone.'</dd>
    <dt>Total number of items:</dt>
    <dd>'.$ordsz.'</dd>
    <dt>Items Ordered:</dt>
    <dd>
      <ul class="itemlist">';
      
      while ($row = mysqli_fetch_array($getitems, MYSQLI_ASSOC)) {
        echo '<li>'.trim($row['quantity'].' '.$row['size'].' '.$row['item_name'])."</li>\r\n";
      }
      echo '</ul>
    </dd>
  </dl>';
}
?>

</div>
<?php
 include("/home/walle/public_html/siam/resources/adminfooter.php");
?>
