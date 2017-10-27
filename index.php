<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
require 'source/bootstrap.php';
session_start();
	?>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="login-panel panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
Admin Login
</h3>
</div>
<div class="panel-body">
<form role="form" action="includes/act_login.php" method="POST">
<fieldset>
<div class="form-group">
<input type="text" name="uname" placeholder="Enter Username" class="form-control" 
 autofocus >
</div>
<div class="form-group">
<input type="password" name="pname" placeholder="Enter Password" class="form-control" 
 autofocus >
 <br>
<a href="" title="">Forget Password</a> ?
</div>
<button type="submit" class="btn btn-success btn-block" name="submit">Login</button>
</fieldset>
</form>
</div>
</div>
<?php
	if(isset($_SESSION['err'])){
?>	
<div class="alert alert-danger text-center">
<?php
echo "<b>Warning: ".$_SESSION['err']."</b>";
unset($_SESSION['err']);
}
else{
?>
<div class="alert alert-info text-center">
<b>This site is under high security</b>
</div>
<?php
}
?>
</div>	

</div>
</div>
</div>
</body>
</html>