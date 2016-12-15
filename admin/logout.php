<?php
session_start();
# use php functions to unset and destroy session
session_unset();
session_destroy();
# manually set PHPSESSID to NULL to remove session info from user's web browser
setcookie('PHPSESSID', NULL);
header('Location: index.php');
exit;
?>
