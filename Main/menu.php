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
	<link href="themes/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<style type="text/css" media="all">
	@import "master.css";
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tinycarousel.min.js"></script>
<script type="text/javascript">         
    $(document).ready(function(){               
                
        $('#slider-code').tinycarousel({ pager: true });
        
    });
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
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
<div id="menu-nav">
<?php
$myFile = "menunav.html";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData;
?>
</div>

<div id="page-container">
<div id="specials" class="container">
  <a id="apps"><h1>Appetizers</h1></a>
  <h2>Crab Ragoons</h2>
  <p>Cream cheese and imitation crab meat </p>
  <h2>Eggrolls</h2>
  <p>Pork with veggies and clear noodles </p>
  <h2>Springs Rolls</h2>
  <p>Fresh shrimp with rice noodles </p>
  <h1><a id="soups">Soups</a></h1>
  <h2>item</h2>
  <p>description </p>
  <h2>item</h2>
  <p>description</p>
  <h2>item</h2>
  <p>description</p>
  <a id="noodles"><h1>Noodles</h1></a>
  <h2>Item</h2>
  <p>description</p>
  <h2>item</h2>
  <p>description</p>
  <h2>item </h2>
  <p>description</p>
  <a id="curries"><h1>Curries</h1></a>
  <h2>item</h2>
  <p>description</p>
  <h2>item</h2>
  <p>description</p>
  <h2>item</h2>
  <p>description</p>
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