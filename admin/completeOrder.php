<?php

if ($_SERVER['REQUEST_METHOD'] == GET && isset($_GET['oid'])) {
  if ($_GET['cmp'] == 't') {
    $orderid = filter_var($_GET['oid'], FILTER_SANITIZE_NUMBER_INT);
  }
  if (!$orderid) {
    $error = 'Invalid request. To complete an order, please use the option on the order detail view.';
  }
  
  $cmpquery = 'UPDATE orders SET status = "0" WHERE id = '.$orderid;
  
  $result = @mysqli_query($dbc, $cmpquery);
  if ($result){
    $success = 'Order has been completed!';
  } else {
    $error = 'Unable to complete that order. Please check that the order exists and has not already been completed.';
  }
}
 ?>
