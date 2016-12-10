<?php
require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
include("../resources/dbConfig.php");

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

$q = "DELETE FROM user WHERE id = ?";
$del = mysqli_prepare($dbc, $q);
mysqli_stmt_bind_param($del, 's', $id);
if (mysqli_execute($del)){
  $success = "User has been successfully deleted.";
} else {
  $error = "Failed deleting user. Please double check and try again.";
}

?>
