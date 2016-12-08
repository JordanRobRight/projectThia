<?php
session_start();
session_destroy();
setcookie("PHPSESSID",null);
header('Location: index.php');
exit;
?>
