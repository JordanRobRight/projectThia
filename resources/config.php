<?php
   define('DBSERVER', 'localhost');
   define('ADMIN_USERNAME', 'walle_siamAdmin');
   define('ADMIN_PASSWORD', 'PAd1@VLOBP3R');
   define('ADMIN_DATABASE', 'walle_admins');
   $admindb = new mysqli(DBSERVER,ADMIN_USERNAME,ADMIN_PASSWORD,ADMIN_DATABASE);
?>
