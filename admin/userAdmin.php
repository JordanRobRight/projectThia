<?php
require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
include("../resources/dbConfig.php");
include("../resources/adminheader.php");
include("create-user.php");

 ?>
 <div class="container-fluid">
   <?php
   if ($error){
     echo "<div class=\"alert alert-danger\">$error</div>";
   } elseif ($success) {
     echo "<div class=\"alert alert-success\">$success</div>";
   }?>
 	<div class="row">
 		<div class="col-md-4">
 			<!--  Begin form for adding a user  -->
 			<h2>Add New Authorized User</h2>
 			<form id="addItem" class="adminform" method="POST" Action="userAdmin.php">
 				<input name="id" type="hidden"<?php if (!empty($uid)){echo ' value="'.$uid.'"';}?>>
 				<div class="form-group">
 					<label for="username">Username:</label>
 					<input type="text" class="form-control resettable" id="username" name="username"<?php if (!empty($uname)){echo ' value="'.$uname.'"';}?>/>
 				</div>
        <div class="form-group">
 					<label for="fullname">Full Name:</label>
 					<input type="text" class="form-control resettable" id="fullname" name="fullname"<?php if (!empty($fname)){echo ' value="'.$fname.'"';}?>/>
 				</div>
        <div class="form-group">
 					<label for="email">Email:</label>
 					<input type="email" class="form-control resettable" id="email" name="email"<?php if (!empty($email)){echo ' value="'.$email.'"';}?>/>
 				</div>
        <div class="form-group">
 					<label for="password">Password:</label>
 					<input type="password" class="form-control resettable" id="password" name="password"/>
 				</div>
 				<button type="submit" class="btn btn-large btn-success adminbtn"><?php if ($edit) {echo 'Submit Changes';} else {echo 'Submit New User';}?></button>
 				<button type="reset" class="btn btn-large btn-danger pull-right adminbtn" id="reset">Reset Form</button>
 			</form>
 		</div>
 		<!-- end of new user form -->


 		<div class="col-md-8">
 			<!--  Begin table to display current users  -->
 			<h2>Currently Authorized Users</h2>
 			<table class="table table-bordered table-condensed table-hover admintable">

 				<?php
 			
 				$users = mysqli_query($dbc, "SELECT * from user");
 				if ($users) {
 					echo'<thead>
 					<tr>
 						<th><a href="menuAdmin.php?s=nm&dir='.$dir.'">Id</a></th>
 						<th><a href="menuAdmin.php?s=pr&dir='.$dir.'">Username</a></th>
 						<th><a href="menuAdmin.php?s=lp&dir='.$dir.'">Full Name</a></th>
 						<th><a href="menuAdmin.php?s=ds&dir='.$dir.'">Email</a></th>
 						<th>Action</th>
 					</tr>
 					</thead>
 					<tbody>';
 					$i = 1;
 					while ($row = mysqli_fetch_array($users, MYSQLI_ASSOC)) {
 						$id = $row['id'];
 						$uname = $row['username'];
 						$name = $row['name'];
 						$email = $row['email'];
 						echo
 						'<tr>
 							<td>'.$id.'</td>
 							<td>'.$uname.'</td>
 							<td>'.$name.'</td>
 							<td>'.$email.'</td>
 							<td>
 								<div class="btn-group">
 									<button type="button" class="btn btn-sm btn-warning dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options  <span class="glyphicon glyphicon-cog"></span></button>
 									<ul class="dropdown-menu btn-menu">
 										<li><a href="changePwd.php?id='.$id.'" alt="edit user" class="btn btn-sm btn-warning btn-block editbtn">Change <br />Password</a></li>
 										<li><a href="deleteUser.php? id='.$id.'" alt="delete user" class="btn btn-sm btn-danger deletebtn" id="del'.$id.'" onclick="return delConfirm()">Delete <br />User</a></li>
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
