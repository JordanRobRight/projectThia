<?php
session_start();
if(!isset($_SESSION['adminLogin']))
{
  //not logged in, redirect to login form
  header('Location: index.php');
  exit;
}
?>
