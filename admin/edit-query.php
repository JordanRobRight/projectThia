<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if (isset($_GET['e']) && $_GET['e'] == 't') {
		$edit = true;
		$fid = filter_var($_GET['eid'], FILTER_SANITIZE_NUMBER_INT);
		$fq = "SELECT * FROM Items WHERE item_id = $fid";

		$find = @mysqli_query($dbc,$fq);

		$found = @mysqli_fetch_array($find, MYSQLI_ASSOC);

		$eid = $found['item_id'];
		$iname = $found['item_name'];
		$idesc = $found['item_description'];
		$cat = strtoupper($found['category']);
		$prot = strtoupper($found['protein']);
		$price = $found['price'];
		$sprice = $found['s_price'];
		$lprice = $found['l_price'];
	}
	if (isset($_GET['scs'])){
		echo '<div class="alert alert-success" role="alert">'.$_GET['scs'].'</div>';
	} if (isset($_GET['err'])){
		echo '<div class="alert alert-danger" role="alert">'.$_GET['err'].'</div>';
	}
}

?>
