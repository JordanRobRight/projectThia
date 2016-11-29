<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siam Thai</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
// include header file
include '../resources/header.php';
?>

    
<div  class="container">
<h1>Featured Dishes</h1>    
</div>
    <!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   
    <div class="item active">
        <img src="../image/crab-rangoon.JPG" alt="Crab Rangoon" >
        <div class="carousel-caption">
          <h3>Crab Rangoon</h3>
        </div>
      </div>

    <div class="item">
      <img src="../image/eggroll.JPG" alt="Egg Roll">
        <div class="carousel-caption">
          <h3>Egg Roll</h3>
        </div>
    </div>

    <div class="item">
      <img src="../image/Khao Piak.JPG" alt="Khao Piak">
        <div class="carousel-caption">
          <h3>Khao Piak</h3>
        </div>
    </div>

    <div class="item">
      <img src="../image/Pad Kra Pow.JPG" alt="Pad Kra Pow">
        <div class="carousel-caption">
          <h3>Pad Kra Pow</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="../image/Pad See Ew.JPG" alt="Pad See Ew">
        <div class="carousel-caption">
          <h3>Pad See Ew</h3>
        </div>
    </div>
      
    <div class="item">
      <img src="../image/Pad Thai.JPG" alt="Pad Thai">
        <div class="carousel-caption">
          <h3>Pad Thai</h3>
        </div>
    </div>
    
    <div class="item">
      <img src="../image/papaya.JPG" alt="Papaya">
        <div class="carousel-caption">
          <h3>Som Tum (Papaya Salad)</h3>
        </div>
    </div>
    
    <div class="item">
      <img src="../image/Seafood Salad.JPG" alt="Seafood Salad">
        <div class="carousel-caption">
          <h3>Seafood Salad</h3>
        </div>
    </div>
    
    <div class="item">
      <img src="../image/Siam Fried Rice.JPG" alt="Siam Fried Rice"><div class="carousel-caption">
          <h3>Siam Fried Rice</h3>
        </div>
    </div> 
    
    <div class="item">
      <img src="../image/Tom Kha Soup.JPG" alt="Tom Kha Soup">
        <div class="carousel-caption">
          <h3>Tom Kha Soup</h3>
        </div>
    </div> 
      
    <div class="item">
      <img src="../image/Tom Yum Soup.JPG" alt="Tom Yum Soup">
        <div class="carousel-caption">
          <h3>Tom Yum Soup</h3>
        </div>
    </div>
    
    <div class="item">
      <img src="../image/Yellow Curry.JPG" alt="Yellow Curry">
      <div class="carousel-caption">
          <h3>Yellow Curry</h3>
        </div>
      </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
<?php
// include footer file
include '../resources/footer.php';
?>
    </body>
</html>