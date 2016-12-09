<?php
// include header file
include 'resources/header.php';


?>
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-6">
<form action="insert.php" method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Customer Information</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone Number:</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address:</label>  
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City:</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="state">State:</label>  
  <div class="col-md-1">
  <input id="state" name="state" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="zip">Zip Code:</label>  
  <div class="col-md-2">
  <input id="zip" name="zip" type="text" placeholder="" class="form-control input-md">
    
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
