<?php
// include header file
include 'resources/header.php';

?>
<div class="container">
  <?php
    if (isset($error)){
      echo '<div class="alert alert-danger">'.$error.'</div>';
    }
  ?>
  <div class="col-lg-12 col-md-12 col-sm-6">
    <form action="insert.php" method="post" class="form-horizontal">

      <fieldset>

        <!-- Form Name -->
        <legend>Customer Information</legend>

        <!-- Text input for name-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="name">Name:</label>
          <div class="col-md-4">
            <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="<?php echo $name ?>">
          </div>
        </div>

        <!-- Text input for email-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="email">Email:</label>
          <div class="col-md-4">
            <input id="email" name="email" type="email" placeholder="" class="form-control input-md" value="<?php echo $email ?>">
          </div>
        </div>

        <!-- Text input phone number-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="phone">Phone Number:</label>
          <div class="col-md-4">
            <input id="phone" name="phone" type="tel" placeholder="" class="form-control input-md" value="<?php echo $phone ?>">
          </div>
        </div>

        <!-- Text input for address-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="address">Address:</label>
          <div class="col-md-4">
            <input id="address" name="address" type="text" placeholder="" class="form-control input-md" value="<?php echo $address ?>">
          </div>
        </div>

        <!-- Text input for city-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="city">City:</label>
          <div class="col-md-4">
            <input id="city" name="city" type="text" placeholder="" class="form-control input-md" value="<?php echo $city ?>">
          </div>
        </div>

        <!-- Text input for state-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="state">State:</label>
          <div class="col-md-1">
            <input id="state" name="state" type="text" placeholder="" class="form-control input-md" value="WI">
          </div>
        </div>

        <!-- Text input for zip code-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="zip">Zip Code:</label>
          <div class="col-md-2">
            <input id="zip" name="zip" type="text" placeholder="" class="form-control input-md" value="<?php echo $zip ?>">
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php
include 'resources/footer.php'
?>
