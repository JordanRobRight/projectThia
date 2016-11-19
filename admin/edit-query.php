<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if (isset($_GET['e']) && $_GET['e'] == 't') {
		$edit = true;
		$fid = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		$fq = "SELECT * FROM Items WHERE item_id = $fid";

		$find = @mysqli_query($conn,$fq);

		$found = @mysqli_fetch_array($find, MYSQLI_ASSOC);

		$eid = $found['item_id'];
		$ename = $found['item_name'];
		$edesc = $found['item_description'];
		$ecat = strtolower($found['category']);
		$eprot = strtolower($found['protein']);
		$eprice = $found['price'];
		$esprice = $found['s_price'];
		$elprice = $found['l_price'];
	}
	if (isset($_GET['scs'])){
		echo '<div class="alert alert-success" role="alert">'.$_GET['scs'].'</div>';
	} if (isset($_GET['err'])){
		echo '<div class="alert alert-danger" role="alert">'.$_GET['err'].'</div>';
	}
}

?>
