<?php
session_start();
include 'resources/dbConfig.php';
// Escape user inputs for security
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
$zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);

// Check for empty text inputs
$check = [
  "Name" => $name,
  "Email" => $email,
  "Phone" => $phone,
  "Address" => $address,
  "City" => $city,
  "State" => $state,
  "Zip" => $zip
];
// Shows which text inputs were empty
foreach($check as $key => $chk){
  if (empty($chk)){
    if (empty($error)){
      $error = "Unable to submit. Please review the following fields: ";
      $error .= $key;
    } else {
      $error .= ', '.$key.' ';
    }
  }
}

//if there are no errors insert into database
if (!isset($error)){
  // attempt insert query execution
  $sql = "INSERT INTO customers (name, email, phone, address, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?)";

  $custCreate = @mysqli_prepare($dbc, $sql);
  
  @mysqli_stmt_bind_param($custCreate, "sssssss", $name, $email, $phone, $address, $city, $state, $zip);
  
  if (!@mysqli_stmt_execute($custCreate)) {
    $error = "Sorry, we're having a problem saving your information. Please try again or call us.";
  }
}


if (!isset($error)) {
  include 'checkout.php';
} else {
  include 'form.php';
}

?>
