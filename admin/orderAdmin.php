<?php
require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
include("../resources/dbConfig.php");
include("../resources/adminheader.php");
?>
<div class="container-fluid">
  <h2>Active Orders</h2>
<?php
if ($error) {
  echo '<div class="alert alert-danger">'.$error.'</div>';
}
$query = 'SELECT o.id, DATE_FORMAT(o.created,\'%h:%i %p %b-%e\') AS created, c.name, ocq.total_items FROM
	(SELECT oiq.order_id, SUM(oiq.theCount * oiq.quantity) AS total_items FROM
		(SELECT order_id, quantity, COUNT(id) AS theCount FROM order_items GROUP BY order_id, quantity) AS oiq GROUP BY oiq.order_id)
	AS ocq
JOIN orders o ON o.id = ocq.order_id
JOIN order_items oi ON ocq.order_id = oi.order_id
JOIN customers c ON c.id = o.customer_id
WHERE o.status = 1
group by o.id';

$orders = @mysqli_query($dbc,$query);
if ($orders) {
  echo '<table class="table table-bordered table-condensed table-hover admintable">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Received</th>
        <th>Customer Name</th>
        <th>Number of items</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
  $i = 1;
  while ($order = mysqli_fetch_array($orders, MYSQLI_ASSOC)) {
    $num = $order['id'];
    $recd = $order['created'];
    $cusnm = ucWords(strtolower($order['name']));
    $ordsz = ucWords(strtolower($order['total_items']));
    echo
    '<tr>
      <td>'.$num.'</td>
      <td>'.$recd.'</td>
      <td>'.$cusnm.'</td>
      <td>'.$ordsz.'</td>
      <td>
        <a href="orderView.php?oid='.$num.'" class="btn btn-sm btn-warning btn-block" alt="detail view">Order Details <span class="glyphicon glyphicon-send"></span></a>
      </td>
    </tr>'."\r\n";
    $i++;
  }
}


 ?>
     </tbody>
   </table>

 </div>
 
 <?php
 	include("/home/walle/public_html/siam/resources/adminfooter.php");
 ?>
