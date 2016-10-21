<?php include("/home/walle/public_html/siam/header.php") ?>

	<div class="container">
		<form id="login" action="login-action.php" method="post">
			<div class="form-group">
					<label for="username">Username: </label>
					<input type="text" name="username" id="username" value="" />
			</div>
			<div class="form-group">
					<label for="password">Password: </label>
					<input type="password" name="password" id="password" value="" />
			</div>
			<div class="form-group">
					<label for="remember">Remember me on this computer</label>
					<input type="checkbox" name="remember" id="remember" value="1" />                        
			</div>
			<input type="submit" value="Submit" /> <input type="reset" value="Reset" />
		</form>
	</div>

<?php include("/home/walle/public_html/siam/footer.php") ?>
