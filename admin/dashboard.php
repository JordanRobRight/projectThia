<?php
	require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
 	include("../resources/config.php");  //poorly designed currently. config.php has credentials for admin db, probably not needed on this page
	include("../resources/publicmenudb.php");  //still poorly designed, I just created a new connection to access menu db
	include("create-item.php");
	include("../resources/header.php");
	include("edit-query.php");

?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<!--  Begin form for adding a menu item  -->
			<h2>Add New Menu Item</h2>
			<form id="addItem" method="POST" <?php if ($edit){echo 'action="edit-action.php"';} else {echo 'action="dashboard.php"';}?>>
				<input name="id" type="hidden"<?php if (!empty($eid)){echo ' value="'.$eid.'"';}?>>
				<div class="form-group">
					<label for="itemName">Item Name:</label>
					<input type="text" class="form-control" id="itemName" name="itemName"<?php if (!empty($ename)){echo ' value="'.$ename.'"';}?>/>
				</div>
				<div class="form-group">
					<label for="itemDesc">Description:</label>
					<textarea class="form-control" id="itemDesc" name="itemDesc" rows="3"><?php if (!empty($edesc)){echo $edesc;}?></textarea>
				</div>
				<div class="form-group">
					<label>Available Sizes:</label>
					<label class="radio-inline">
						<input type="radio" id="smallLarge" name="priceSel" value="sl"<?php if (!empty($elprice) && $elprice != 0){echo ' checked';}?>> Small/Large
					</label>
					<label class="radio-inline">
						<input type="radio" id="oneSize" name="priceSel" value="os"<?php if (empty($elprice) || $elprice == 0){echo ' checked';}?>> One Size
					</label>
				</div>
				<div class="form-group" id="one-size">
					<label for="price">Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="price" name="price"<?php if (empty($elprice) || $elprice == 0){echo ' value="'.$eprice.'"';}?>/>
				</div>
				<div class="form-group small-large">
					<label for="sprice">Size Small Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="sprice" name="sprice"<?php if (!empty($elprice) && $elprice != 0){echo ' value="'.$esprice.'"';}?>/>
				</div>
				<div class="form-group small-large">
					<label for="lprice">Size Large Price:</label> <!-- we'll need multiple price options if multiple sizes are selected -->
					<input type="text" class="form-control" id="lprice" name="lprice"<?php if (!empty($elprice) && $elprice != 0){echo ' value="'.$elprice.'"';}?>/>
				</div>
				<div class="form-group">
					<label for="protein">Protein: </label>
					<select class="form-control" name="protein">
						<option <?php if (empty($eprot)) { echo 'selected ';}?>value="">Select</option>
						<option <?php if (!empty($eprot) && $eprot == 'beef') {echo 'selected ';}?>value="Beef">Beef</option>
						<option <?php if (!empty($eprot) && $eprot == 'chicken') {echo 'selected ';}?>value="Chicken">Chicken</option>
						<option <?php if (!empty($eprot) && $eprot == 'pork') {echo 'selected ';}?>value="Pork">Pork</option>
						<option <?php if (!empty($eprot) && $eprot == 'shrimp') {echo 'selected ';}?>value="Shrimp">Shrimp</option>
						<option <?php if (!empty($eprot) && $eprot == 'tofu') {echo 'selected ';}?>value="Tofu">Tofu</option>
						<option <?php if (!empty($eprot) && $eprot == 'vegetable') {echo 'selected ';}?>value="Vegetable">Vegetable</option>
						<option <?php if (!empty($eprot) && $eprot == 'multiple') {echo 'selected ';}?>value="Multiple">Multiple</option>
					</select>
				</div>
				<div class="form-group">
					<label for="category">Category: </label>
					<select class="form-control" name="category">
						<option <?php if (empty($ecat)) { echo 'selected ';}?>selected value="">Select</option>
						<option <?php if (!empty($ecat) && $ecat == 'appetizer') {echo 'selected ';}?>value="appetizer">Appetizer</option>
						<option <?php if (!empty($ecat) && $ecat == 'noodlesoup') {echo 'selected ';}?>value="noodlesoup">Noodle Soup</option>
						<option <?php if (!empty($ecat) && $ecat == 'soup') {echo 'selected ';}?>value="soup">Soup</option>
						<option <?php if (!empty($ecat) && $ecat == 'salad') {echo 'selected ';}?>value="salad">Salad</option>
						<option <?php if (!empty($ecat) && $ecat == 'curry') {echo 'selected ';}?>value="curry">Curry</option>
						<option <?php if (!empty($ecat) && $ecat == 'stirfry') {echo 'selected ';}?>value="stirfry">Stir-Fry</option>
						<option <?php if (!empty($ecat) && $ecat == 'entree') {echo 'selected ';}?>value="entree">Entree</option>
						<option <?php if (!empty($ecat) && $ecat == 'friedrice') {echo 'selected ';}?>value="friedrice">Fried Rice</option>
						<option <?php if (!empty($ecat) && $ecat == 'beverage') {echo 'selected ';}?>value="beverage">Beverage</option>
						<option <?php if (!empty($ecat) && $ecat == 'dessert') {echo 'selected ';}?>value="dessert">Dessert</option>
					</select>
				</div>
				<button type="submit" class="btn btn-large btn-success"><?php if ($edit) {echo 'Submit Changes';} else {echo 'Submit New Item';}?></button>
			</form>
		</div>
		<!-- end of new menu item form -->


		<div class="col-md-8">
			<!--  Begin table to display current menu items  -->
			<h2>View Menu Items</h2>
			<?php
			$display = 10;

			if (isset($_GET['p']) && is_numeric($_GET['p'])) {				//if $get p is set that is the current page if not, we're starting at page 1
				$curpg = filter_var($_GET['p'],FILTER_SANITIZE_NUMBER_INT);

				if ($curpg > 150) {																			//prevent someone from editing the uri to put unreasonable values.
					echo '<div class="alert alert-danger">'.							//this statement will break the dashboard page if more than 1500 items exist in menu DB
					'The requested page does not exist.
					</div>';
					exit();
				}
			} else {
				$curpg = 1;
			}

			$q = "SELECT COUNT(*) FROM Items";						//calculate the number of pages and offset value
			$r = @mysqli_query($conn, $q);
			$ret = @mysqli_fetch_array($r, MYSQLI_NUM);
			$count = $ret[0];
			if ($count > $display) {
				$numpgs = ceil($count/$display);
				$offset = ($curpg - 1) * $display;
			} else {
				$numpgs = 1;
				$offset = 0;
			}
			$prev = '';
			$next = '';
			if ($curpg == 1) {														//set variable to inactivate next or previous buttons if on first or last page
				$prev = ' class="disabled"';
			} else if ($curpg == $numpgs) {
				$next = ' class="disabled"';
			}
			?>
			<table class="table table-bordered table-condensed table-hover">

				<?php

				$items = mysqli_query($conn, "select * from Items ORDER BY category, item_name LIMIT $offset, $display");

				if ($items) {
					echo'<tr>
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
						if (!empty($row['s_price']) && $row['s_price'] != 0){					//some manually inserted menu items have s_price = NULL and those passed from UI get set to 0.00
							$price = $row['s_price'];
							$lprice = $row['l_price'];
							$sizes = 'S/L';
						} else {
							$price = $row['price'];
							$lprice = 'n/a';
							$sizes = 'One Size';
						}
						$desc = $row['item_description'];
						$cat = ucWords(strtolower($row['category']));
						$meat = ucWords(strtolower($row['protein']));
						$iid=$row['item_id'];
						echo
						'<tr>
							<td>'.$item.'</td>
							<td>'.$sizes.'</td>
							<td>'.$price.'</td>
							<td>'.$lprice.'</td>
							<td>'.$desc.'</td>
							<td>'.$cat.'</td>
							<td>'.$meat.'</td>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="dashboard.php?e=t&id='.$iid.'" alt="edit item">Edit Item</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="dashboard.php?d=t&id='.$iid.'" alt="delete item">Delete Item</a></li>
									</ul>
								</div>
							</td>
						</tr>';
						$i++;
					}
				}
				?>
			</table>
			<?php 							//display pagination
			if ($numpgs > 1) {
				echo '<nav aria-label="Page navigation">
					<ul class="pagination">
						<li '.$prev.'>
							<a href="dashboard.php?p='.($curpg-1).'" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>';
						for ($i=1; $i <= $numpgs; $i++){
							echo '<li><a href="dashboard.php?p='.$i.'">'.$i.'</a></li>';
						}
						echo '<li'.$next.'>
							<a href="dashboard.php?p='.($curpg+1).'" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>';
			} ?>
			<!--  End current menu item table  -->
		</div>
	</div>
</div>

<?php
	include("/home/walle/public_html/siam/resources/footer.php");
?>
