<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(43.0188183,-87.9745458);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
        
        var var_map= new google.maps.Map(document.getElementById("map-container"),var_mapoptions);
       	var contentString = 
			'<div id="infowindow_content">'+
            '<p><strong>Siam Thai</strong><br>'+
            '<br><a href="tel:1-414-672-7246"><b>(414) 672-7426</b></a>'
            '</div>';
 
        var var_infowindow = new google.maps.InfoWindow({
            content: contentString
          });
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Click on marker to see info",
                  maxWidth: 500
				  });
 
		google.maps.event.addListener(var_marker, 'click', function() {
		var_infowindow.open(var_map,var_marker);
		  });	
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
</head>
<body id="background">
<?php
// include header file
include '../resources/header.php';
?>


<div class="container" id="hours">
<h3>Hours</h3>
   <div class="table-responsive">          
  <table class="table">
        <tr>
          <td class="day">Sunday:</td>
          <td class="time">Closed</td>
        </tr>
        <tr>
          <td class="day">Monday:</td>
          <td class="time">11am - 9pm</td>
        </tr>
        <tr>
          <td class="day">Tuesday:</td>
          <td class="time">11am - 9pm</td>
        </tr>
        <tr>
          <td class="day">Wednesday:</td>
          <td class="time">11am - 9pm</td>
        </tr>
        <tr>
          <td class="day">Thursday:</td>
          <td class="time">11am - 9pm</td>
        </tr>
        <tr>
          <td class="day">Friday:</td>
          <td class="time">11am - 9pm</td>
        </tr>
        <tr>
          <td class="day">Saturday:</td>
          <td class="time">11am - 9pm</td>
        </tr>
      </table>
  </div>
</div>
    
<div class="container">
  <div class="row">
      <div id="map-outer" class="col-md-12">
          <div id="address" class="col-md-4">
            <address>
                <p><strong>Siam Thai</strong></p>
                <p>4819 W National Ave</p>
                <p>Milwaukee WI 53214</p>
                <p><a href="tel:1-414-672-7246">Telephone: <b>(414) 672-7426</b></a></p>
                <p> Email:</p>
                <p><a href="mailto:siamThai@gmail.com" target="_top">siamThai@gmail.com</a></p>
           </address>
          </div>
        <div id="map-container" class="map-responsive">
            <div>class="col-md-8"></div>
        </div>
        </div> 
    </div>
</div>
    
<?php
// include footer file
include '../resources/footer.php';
?>
    </body>
