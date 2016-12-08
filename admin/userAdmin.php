<?php
require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
include("../resources/dbConfig.php");
include("../resources/adminheader.php");

 ?>
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-4">
 			<!--  Begin form for adding a menu item  -->
 			<h2>Add New Authorized User</h2>
 			<form id="addItem" class="adminform" method="POST" <?php if ($edit){echo 'Action="edit-action.php"';} else {echo 'Action="userAdmin.php"';}?>>
 				<input name="id" type="hidden"<?php if (!empty($eid)){echo ' value="'.$eid.'"';}?>>
 				<div class="form-group">
 					<label for="itemName">Username:</label>
 					<input type="text" class="form-control resettable" id="username" name="username"<?php if (!empty($uname)){echo ' value="'.$uname.'"';}?>/>
 				</div>
        <div class="form-group">
 					<label for="itemName">Full Name:</label>
 					<input type="text" class="form-control resettable" id="fullname" name="fullname"<?php if (!empty($fname)){echo ' value="'.$fname.'"';}?>/>
 				</div>
 				<button type="submit" class="btn btn-large btn-success adminbtn"><?php if ($edit) {echo 'Submit Changes';} else {echo 'Submit New User';}?></button>
 				<button type="reset" class="btn btn-large btn-danger pull-right adminbtn" id="reset">Reset Form</button>
 			</form>
 		</div>
 		<!-- end of new menu item form -->


 		<div class="col-md-8">
 			<!--  Begin table to display current menu items  -->
 			<h2>Currently Authorized Users</h2>
 			<table class="table table-bordered table-condensed table-hover admintable">

 				<?php
 			
 				$items = mysqli_query($dbc, "SELECT * from Items ORDER BY $order LIMIT $offset, $display");
 				if ($items) {
 					echo'<thead>
 					<tr>
 						<th><a href="menuAdmin.php?s=nm&dir='.$dir.'">Menu Item</a></th>
 						<th>Sizes</th>
 						<th><a href="menuAdmin.php?s=pr&dir='.$dir.'">Price</a></th>
 						<th><a href="menuAdmin.php?s=lp&dir='.$dir.'">Large Price</a></th>
 						<th><a href="menuAdmin.php?s=ds&dir='.$dir.'">Description</a></th>
 						<th><a href="menuAdmin.php?s=ct&dir='.$dir.'">Category</a></th>
 						<th><a href="menuAdmin.php?s=pt&dir='.$dir.'">Protein</a></th>
 						<th>Action</th>
 					</tr>
 					</thead>
 					<tbody>';
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
 									<button type="button" class="btn btn-sm btn-warning dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options  <span class="glyphicon glyphicon-cog"></span></button>
 									<ul class="dropdown-menu btn-menu">
 										<li><a href="menuAdmin.php?e=t&eid='.$iid.'&p='.$curpg.'" alt="edit user" class="btn btn-sm btn-warning btn-block editbtn">Edit <br />Item</a></li>
 										<li><a href="menuAdmin.php?d=t&did='.$iid.'&p='.$curpg.'" alt="delete user" class="btn btn-sm btn-danger deletebtn" id="del'.$iid.'" onclick="return delConfirm()">Delete <br />Item</a></li>
 									</ul>
 								</div>
 							</td>
 						</tr>';
 						$i++;
 					}
 				}
 				?>
 				</tbody>
 			</table>
 			<!--  End current user table  -->
 		</div>
 	</div>
 </div>

 <?php
 	include("/home/walle/public_html/siam/resources/adminfooter.php");
 ?>
