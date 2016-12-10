<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $salt = 'thaiF0od1sDelic.ou5&n0t2salty';
  
  $uname = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $name = filter_var($_POST['fullname'],FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
  $hashpass = crypt(filter_var($_POST['password'],FILTER_SANITIZE_STRING),$salt);
  
  $qry = 'INSERT INTO user (username, name, email, password) VALUES (?, ?, ?, ?)';
  $userCreate = mysqli_prepare($dbc, $qry);
  mysqli_stmt_bind_param($userCreate, 'ssss', $uname, $name, $email, $hashpass);
  
  if (mysqli_execute($userCreate)) {
    $success = "User has been created";
  } else {
    $error = "Unable to create user. Please check the information submitted and try again.";
  }
}

?>
