<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if (isset($_GET['d']) && $_GET['d'] == 't') {
		$delete = true;
		$did = filter_var($_GET['did'], FILTER_SANITIZE_NUMBER_INT);

		$dcheck = "SELECT COUNT(*) FROM Items WHERE item_id = $did";
		$dcheckresult = @mysqli_query($conn,$dcheck);
		$delrows = @mysqli_num_rows($dcheckresult);

		if ($delrows === 1) {

			$dq = "DELETE FROM Items WHERE item_id = $did";

			if (@mysqli_query($conn,$dq)) {
				$success = 'Record has been deleted';
			} else {
				$error = 'Something went wrong.'.$delrows.' rows were returned. Please return to the <a href="dashboard.php">home page</a> and try again.';
			}
		}
	}
}
?>
