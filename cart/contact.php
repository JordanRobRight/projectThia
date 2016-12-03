<?php
// include header file
include '../resources/header.php';
?>

  <div class= "container-fluid background">
    <div class="container colorDisplay">
        <h3>Hours</h3>
        <table class="table table-responsive">
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
  </div>

  <script src="../resources/googleMaps.js"></script>
  <?php
// include footer file
include '../resources/footer.php';
?>
