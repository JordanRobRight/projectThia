<?php
	require("/home/walle/public_html/siam/admin/adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
 	include("/home/walle/public_html/siam/resources/config.php");  //poorly designed currently. config.php has credentials for admin db, probably not needed on this page
	include("/home/walle/public_html/siam/resources/publicmenudb.php");  //still poorly designed, I just created a new connection to access menu db
	include("/home/walle/public_html/siam/admin/create-item.php");
	include("/home/walle/public_html/siam/resources/header.php");
?>


<div class="container-fluid">
	<!-- On medium and larger screens, row puts new item and menu display on one line. Form will take up 1/3 of screen width and menu display remaining two thirds-->
	<div class="row">
		<!-- Set column width -->
		<div class="col-md-4">
			<h2>Add New Menu Item</h2>
			<!-- Begin new menu form -->
			<form id="addItem" method="POST" action="dashboard.php">
				<div class="form-group">
					<label for="itemName">Item Name:</label>
					<input type="text" class="form-control" id="itemName" name="itemName"/>
				</div>
				<div class="form-group">
					<label for="itemDesc">Description:</label>
					<textarea class="form-control" id="itemDesc" name="itemDesc" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label>Available Sizes:</label>
					<label class="radio-inline">
						<input type="radio" id="smallLarge" name="priceSel" value="sl"> Small/Large
					</label>
					<label class="radio-inline">
						<input type="radio" id="oneSize" name="priceSel" value="os" checked> One Size
					</label>
				</div>
				<div class="form-group" id="one-size">
					<label for="price">Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="price" name="price"/>
				</div>
				<div class="form-group small-large">
					<label for="sprice">Size Small Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="sprice" name="sprice"/>
				</div>
				<div class="form-group small-large">
					<label for="lprice">Size Large Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="lprice" name="lprice"/>
				</div>
				<div class="form-group">
					<label for="protein">Protein: </label>
					<select class="form-control" name="protein">
						<option selected value="">Select</option>
						<option value="Beef">Beef</option>
						<option value="Chicken">Chicken</option>
						<option value="Pork">Pork</option>
						<option value="Shrimp">Shrimp</option>
						<option value="Tofu">Tofu</option>
						<option value="Vegetable">Vegetable</option>
						<option value="Multiple">Multiple</option>
					</select>
				</div>
				<div class="form-group">
					<label for="category">Category: </label>
					<select class="form-control" name="category">
						<option selected value="">Select</option>
						<option value="apps">Appetizer</option>
						<option value="noodle">Noodle Soup</option>
						<option value="soup">Soup</option>
						<option value="salad">Salad</option>
						<option value="curry">Curry</option>
						<option value="stirfry">Stir-Fry</option>
						<option value="entree">Entree</option>
						<option value="friedrice">Fried Rice</option>
						<option value="beverage">Beverage</option>
						<option value="dessert">Dessert</option>
					</select>
				</div>

				<button type="submit" class="btn btn-large btn-success" href="#">Submit New Item</button>
			</form>
		</div>
		<div class="col-md-8"> <!--display existing entries at half screen width-->
			<h2>View Menu Items</h2><nav aria-label="Page navigation"> <!--this will be php loop generated later based on number of results using modulus operator to limit number of items per page and calculate pages -->
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
			<table class="table table-bordered table-condensed table-hover">

				<?php

				$items = mysqli_query($conn, "select * from Items");

				if ($items) {
					echo'<tr>
						<th>ID</th>
						<th>Menu Item</th>
						<th>Sizes</th>
						<th>Price</th>
						<th>Large Price</th>
						<th>Description</th>
						<th>Category</th>
						<th>Protein</th>
						<th>Actions</th>
					</tr>';
					$i = 1;
					while ($row = mysqli_fetch_array($items, MYSQLI_ASSOC)) {
						$item = $row['item_name'];
						if (!empty($row['s_price'])){
							$price = $row['s_price'];
							$lprice = $row['l_price'];
							$sizes = 'S/L';
						} else {
							$price = $row['price'];
							$lprice = 'n/a';
							$sizes = 'One Size';
						}
						$desc = $row['item_description'];
						$cat = $row['category'];
						$meat = $row['protein'];

						echo
						'<tr>
							<td>'.$i.'</td>
							<td>'.$item.'</td>
							<td>'.$sizes.'</td>
							<td>'.$price.'</td>
							<td>'.$lprice.'</td>
							<td>'.$desc.'</td>
							<td>'.$cat.'</td>
							<td>'.$protein.'</td>
							<td><a class="btn btn-small btn-block btn-warning" href="#">Edit</a><a class="btn btn-small btn-block btn-danger" href="#">Delete</a></td>
						</tr>';
						$i++;
					}
				}
				?>
			</table>
		</div>
	</div>
</div>

<?php
	include("/home/walle/public_html/siam/resources/footer.php");
?>
