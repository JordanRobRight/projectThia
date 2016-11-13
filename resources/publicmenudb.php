<?php
	define('MENU_SERV','localhost');
	define('MENU_USER', 'walle_publicmenu');
	define('MENU_PASS', 'q$Ve+o-[LM4k');
	define('MENU_DB', 'walle_siamthaimenu');

	$conn = @mysqli_connect(MENU_SERV, MENU_USER, MENU_PASS, MENU_DB) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

	// Set the encoding...
	@mysqli_set_charset($conn, 'utf8');
?>
