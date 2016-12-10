<?php
require("adminauth.php");  //adminauth has to be included first, so session_start() function is at top of final script
include("../resources/dbConfig.php");
include("../resources/adminheader.php");

$edit = true;

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$q = "SELECT * FROM user WHERE id = ?";
$getInfo = @mysqli_prepare($dbc, $q);
@mysqli_stmt_bind_param($getInfo, 'i', $id);
@mysqli_execute($getInfo);
@mysqli_stmt_bind_result($getInfo, $qid, $uname, $name, $email, $pwd);
@mysqli_stmt_fetch($getInfo);
@mysqli_close($getInfo);

include("../resources/dbConfig.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $salt = 'thaiF0od1sDelic.ou5&n0t2salty';
  
  if ($_POST['newPass'] === $_POST['confirmPass']){
    $chkpwd = crypt(filter_var($_POST['currentPass'],FILTER_SANITIZE_STRING), $salt);
    $newPassHash = crypt(filter_var($_POST['newPass'],FILTER_SANITIZE_STRING), $salt);
    if (trim($chkpwd) == trim($pwd) && $id == $qid) {
      $updt = 'UPDATE user SET password = ? WHERE id = ?';
      $updatePass = mysqli_prepare($dbc, $updt);
      mysqli_stmt_bind_param($updatePass, 'si', $newPassHash, $id);

      if (mysqli_execute($updatePass)){
        $success = 'Password successfully changed';
      } else {
        $error = "Invalid entry for current password. Please try again.";
      }
    } else {
      $error = "New password and confirm password do not match.";
    }
  }
}
?>
<div class="container-fluid">
  <?php
  if ($error){
    echo "<div class=\"alert alert-danger\">$error</div>";
  } elseif ($success) {
    echo "<div class=\"alert alert-success\">$success</div>";
  } ?>
  <h2>Change Password</h2>
  <form id="changePass" class="adminform" method="POST" Action="<?php echo "changePwd.php?id=$id";?>">
    <input name="id" type="hidden"<?php if (!empty($id)){echo ' value="'.$id.'"';}?>>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control resettable" id="username" name="username" disabled <?php if (!empty($uname)){echo ' value="'.$uname.'"';}?>/>
    </div>
    <div class="form-group">
      <label for="fullname">Full Name:</label>
      <input type="text" class="form-control resettable" id="fullname" name="fullname" disabled <?php if (!empty($name)){echo ' value="'.$name.'"';}?>/>
    </div>
    <div class="form-group">
      <label for="currentPass">Current Password:</label>
      <input type="password" class="form-control resettable" id="currentPass" name="currentPass"/>
    </div>
    <div class="form-group">
      <label for="newPass">New Password:</label>
      <input type="password" class="form-control resettable" id="newPass" name="newPass"/>
    </div>
    <div class="form-group">
      <label for="confirmPass">Confirm New Password:</label>
      <input type="password" class="form-control resettable" id="confirmPass" name="confirmPass"/>
    </div>
    <button type="submit" class="btn btn-large btn-success adminbtn"><?php if ($edit) {echo 'Submit Changes';} else {echo 'Submit New User';}?></button>
  </form>
</div>
<?php
include("/home/walle/public_html/siam/resources/adminfooter.php");
?>
