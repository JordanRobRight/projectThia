<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$error = '';				//define variable to hold error messages
		$success = '';			//define variable to hold success messages

		## define variables to hold post values and sanitize input
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

		if (empty($price) && (empty($sprice) && empty($lprice))) {
			$error = "Price entry is required";
		} else if (empty($iname) || empty($idesc)){
			$error = "Both item name and item description are required";
		} else {



			$query = "INSERT INTO walle_siamthaimenu.Items (item_id, item_name, item_description, category, protein, price, s_price, l_price) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";

			$insQuery = mysqli_prepare($dbc, $query);
			$myquery = mysqli_stmt_bind_param($insQuery, "ssssddd", $iname, $idesc, $cat, $prot, $price, $sprice, $lprice);
			if (mysqli_stmt_execute($insQuery)) {
				$success = 'Item has been successfully added to the menu';
			} else {
				$error = 'Something went wrong while submitting, please check your entry and try again.';
			}
		}
	}
?>
