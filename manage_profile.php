<?php
require 'blank_page.php';
require 'includes/database/connection.php';

$username;
$enteredPassword;

$query = "SELECT * from admin WHERE id=".$_SESSION['active_id']."";
$request =mysql_query($query);
$value = mysql_fetch_array($request);

$username = $value['username'];
$password = $value['password'];

if(isset($_POST['password'])) {
	$enteredPassword = $_POST['password'];

	if($enteredPassword === $password){
		?>
		<!-- Toogle Display -->
		<style type="text/css">
			.div1{
				display: none !important;
			}
			.div2{
				display: block !important;
			}
		</style>
		<?php
	}
}


// Update profile
if(isset($_POST['profile_update'])){
	$changed_username = $_POST['changed_username'];
	$changed_password = $_POST['changed_password'];
	$query = "UPDATE admin set username='$changed_username', password='$changed_password' where id=".$_SESSION['active_id']."";
	$request = mysql_query($query);
	if ($request) {
		$_SESSION['dshmsg'] = 'Profile Updated';
		header("Location:./dashboard.php");
	}
}

?>
<body>
<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<div class="container">
		<div class="div1">
			<p>Please enter your password for continue.</p>
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php
						echo $username;
					?>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2">Password</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="div2 display_none">
			<p>Please update your details</p>
			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="changed_username" value="<?php echo $username; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="changed_password">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">Confirm password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="confirm_password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default" name="profile_update">Update</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>