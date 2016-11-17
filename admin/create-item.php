<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$error = '';				//define variable to hold error messages
		$success = '';			//define variable to hold success messages

		## define variables to hold post values and sanitize input
		$iname = trim(strtoupper(filter_var($_POST['itemName'],FILTER_SANITIZE_STRING)));
		$idesc = trim(strtoupper(filter_var($_POST['itemDesc'],FILTER_SANITIZE_STRING)));
		$price = trim(strtoupper(filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT)));
		$sprice = trim(strtoupper(filter_var($_POST['sprice'],FILTER_SANITIZE_NUMBER_INT)));
		$lprice = trim(strtoupper(filter_var($_POST['lprice'],FILTER_SANITIZE_NUMBER_INT)));
		$cat = trim(strtoupper(filter_var($_POST['category'],FILTER_SANITIZE_STRING)));
		$protein = trim(strtoupper(filter_var($_POST['protein'],FILTER_SANITIZE_STRING)));

		$query = "INSERT INTO walle_siamthaimenu.Items (item_id, item_name, item_description, category, protein, price, s_price, l_price) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";

		$insQuery = mysqli_prepare($conn, $query);
		mysqli_stmt_bind_param($insQuery, "ssssddd", $iname, $idesc, $cat, $protein, $price, $sprice, $lprice);
		if (mysqli_stmt_execute($insQuery)) {
			$success = 'Item has been successfully added to the menu';
		} else {
			$error = 'Something went wrong while submitting, please check your entry and try again.';
		}
	}
?>
