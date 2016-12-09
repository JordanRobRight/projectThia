<?php
include 'resources/dbConfig.php';

 
// Escape user inputs for security
$name = mysqli_real_escape_string($dbc, $_POST['name']);
$email = mysqli_real_escape_string($dbc, $_POST['email']);
$phone = mysqli_real_escape_string($dbc, $_POST['phone']);
$address = mysqli_real_escape_string($dbc, $_POST['address']);
$city = mysqli_real_escape_string($dbc, $_POST['city']);
$state = mysqli_real_escape_string($dbc, $_POST['state']);

// attempt insert query execution
$sql = "INSERT INTO customers (id, name, email, phone, address, city, state, zip) VALUES ('$_SESSION', '$name', '$email', '$phone', '$address', '$city', '$state', '$zip')";

header('Location: checkout.php');
?>
