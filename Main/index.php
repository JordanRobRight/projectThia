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
	
	<meta name="Lumiere Imagery" content="CONTENT" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<style type="text/css" media="all">
	@import "master.css";
    </style>
<script type="text/javascript">         
    $(document).ready(function(){               
                
        $('#slider-code').tinycarousel({ pager: true });
        
    });
</script> 
              
    
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

<div id="index" class="container">
<h1>Welcome</h1>
<h3>Text here</h3>

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