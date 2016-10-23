<?php
	include("login.php"); //include login script

	if(isset($_SESSION['adminLogin'])){  //if session already set redirect
		header("location: dashboard.php");
	}
		include("/home/walle/public_html/siam/resources/header.php"); //use consistent html head
?>

	<div class="container">
		<h2>Administrator Login</h2>
		<form id="login" action="" method="post" class="form-horizontal">
			<div class="form-group">
					<label for="username">Username: </label>
					<input type="text" name="username" id="username" value="" class="form-control"/>
			</div>
			<div class="form-group">
					<label for="password">Password: </label>
					<input type="password" name="password" id="password" value="" class="form-control"/>
			</div>
			<div class="checkbox">
  			<label>
    			<input type="checkbox" value="1">
    			Remember Me
  			</label>
			</div>
			<div class="form-group">
				<input type="submit" value="Submit" class="btn btn-success" /> <input type="reset" value="Reset" class="btn btn-danger"/>
			</div>
		</form>
	</div>

<?php include("/home/walle/public_html/siam/resources/footer.php"); ?>
