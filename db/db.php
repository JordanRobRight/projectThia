<?php 
/*
db.php initiates database connection and assigns $db variable for access
credit to Swashata <swashata@intechgrity.com> for tutorial for which this code is based
http://www.intechgrity.com/login-logout-and-administrate-using-php-session-cookie-mysql-version-2-with-remember-me-option/#
*/

//configuration
$dbuser = 'walle_siamAdmin';
$dbname = 'walle_admins';
$dbpassword = 'Td0smwVw%y])';
$dbhost = 'localhost';					//localhost because db is hosted on web server

/*the following code is directly from Swashata's tutorial to set up ez_sql*/

/** defined the root for the db */
if(!defined('ADMIN_DB_DIR'))
define('ADMIN_DB_DIR', dirname(__FILE__));
 
require_once ADMIN_DB_DIR . '/ez_sql_core.php';
require_once ADMIN_DB_DIR . '/ez_sql_mysql.php';
global $db;
$db = new ezSQL_mysql($dbuser, $dbpassword, $dbname, $dbhost);
?>