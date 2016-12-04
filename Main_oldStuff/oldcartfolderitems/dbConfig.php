<?php 
// Set the database access information as constants:
DEFINE ('DB_USER', 'walle_siamAdmin');
DEFINE ('DB_PASSWORD', 'PAd1@VLOBP3R');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'walle_siamthaimenu');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');
?>