<?php
	include("/home/walle/public_html/siam/admin/adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
 	include("/home/walle/public_html/siam/resources/config.php");
	include("/home/walle/public_html/siam/resources/publicmenudb.php");
	include("/home/walle/public_html/siam/resources/header.php");

?>

<!--end of header.php-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"> <!--insert record form half screen width-->
			<h2>Add New Menu Item</h2>
			<form id="addItem">
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
					<label class="checkbox-inline">
						<input type="checkbox" id="sizeSmall" value="small"> Small
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="sizeLarge" value="large"> Large
					</label>
					<label class="checkbox-inline">
						<input type="checkbox" id="notSized" value="none"> Not Sized <!--use javascript to disable small and large if Not Sized selected -->
					</label>
				</div>
				<div class="form-group">
					<label for="protein">Protein: </label>
					<select class="form-control" name="protein">
						<option>Select</option>
						<option>Beef</option>
						<option>Chicken</option>
						<option>Pork</option>
						<option>Shrimp</option>
						<option>Tofu</option>
						<option>Vegetable</option>
					</select>
					<span id="helpBlock2" class="help-block">Maybe not a dropdown, either text box or multipicker of some kind?</span>
				</div>
				<div class="form-group">
					<label for="price">Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="price" name="price"/>
					<span id="helpBlock2" class="help-block">Will probably have price, small price, large price, and shrimp price that display or hide depending on previous selections</span>
				</div>
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
							<td><a href="#">Edit</a></td>
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
