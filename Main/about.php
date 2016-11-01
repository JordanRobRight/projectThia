<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Siam Thai</title>
	<meta http-equiv="Content-Language" content="en-us" />
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	
	<meta name="description" content="Siam Thai" />
	<meta name="keywords" content="thai, lao, restaurant, milwaukee, authentic" /><meta name="description" content="Description" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<meta name="Lumiere Imagery" content="CONTENT" />
	<style type="text/css" media="all">
	@import "master.css";
	
    </style>
</head>

<body>
<div class="top" id="hboard_home">
<img src="images/header01.png" width="1362" height="195" alt=""/> </div>
<div id="main-nav">
	<?php
$myFile = "topnav.html";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>
</div>
<div id="page-container">

	<div id="header"></div>

	</div>
	<div id="content">
    <div id="menu">
	<div id="textabout">
	  <h2>About Us</h2></p>
	  <p>SIAM Thai
Restaurant
"Eat Good, Be Happy"
Now is the time to try 
Siam Thai

Dine In - Carry Out - Pick Up - Delivery

(414) 672-7426
4819 W National Ave Milwaukee, WI 53214

Hours
Monday - Saturday: 11 AM - 9 PM
Sunday: Closed

15% Gratuity for parties of 5 or more
Please inform your server of any food allergies you may have
$10 minimum for all credit card purchases
</p>
	</div>
    </div>  
	</div>
	
	<div id="footer">
	<?php
$myFile = "footernav.html";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>
  </div>

</div>

</body>
</html>