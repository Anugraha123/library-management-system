<?php
require 'blank_page.php';
?>
<body>
<div class="container">
<?php
if(isset($_SESSION['catmsg'])){
?>
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['catmsg']."</b>"; 
unset($_SESSION['catmsg']);
 ?>
</div>
<?php
}
else if(isset($_SESSION['catsuc'])){
?>
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['catsuc']."</b>";  
unset($_SESSION['catsuc']);
?>
</div>
<?php
}
else{
	echo "";
}
?>
<div class="panel panel-default">
<div class="panel-heading">
Add Category
</div>
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="includes/act_addcategory.php">

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Category Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="category">
</div>
</div>

<div class="form-group"> 
<label class="control-label col-sm-2" for="email">*Status:</label>
<div class="checkbox">
<label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="status">Active</label>
</div>

</div>
<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</body>