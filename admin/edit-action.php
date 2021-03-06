<?php
	require("adminauth.php");  //adminauth has to be included first, starts session and redirects users not logged in.
	include("../resources/dbConfig.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$error = '';				//define variable to hold error messages
		$success = '';			//define variable to hold success messages

		## define variables to hold post values and sanitize input
		$id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
		$iname = $_POST['itemName'];
		$idesc = $_POST['itemDesc'];
		$price = $_POST['price'];
		$sprice = $_POST['sprice'];
		$lprice = $_POST['lprice'];
		$cat = strtoupper($_POST['category']);
		$prot = strtoupper($_POST['protein']);

		if ($_POST['priceSel'] == 'os') {
			$sprice = null;
			$lprice = null;
		} else {
			$price = null;
		}

		$query = "UPDATE walle_siamthaimenu.Items SET item_name = ?, item_description = ?, category = ?, protein = ?, price = ?, s_price = ?, l_price = ? WHERE item_id = ?";
		mysqli_prepare($dbc, $query);

		$updQuery = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($updQuery, "ssssdddd", $iname, $idesc, $cat, $prot, $price, $sprice, $lprice, $id);
		if (mysqli_stmt_execute($updQuery)) {
			$success = 'Item has been successfully updated';
		} else {
			$error = 'Something went wrong while submitting, please check your entry and try again.';
		}

		if ($error){
			header('location:menuAdmin.php?err='.urlencode($error));
		} elseif ($success){
			header('location:menuAdmin.php?scs='.urlencode($success));
		}


	} else {
		header('location:menuAdmin.php');
	}


 ?>
