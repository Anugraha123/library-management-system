<?php
require 'blank_page.php';
?>
<body>
<div class="container">
<?php
if(isset($_SESSION['autmsg'])){
?>
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['autmsg']."</b>"; 
unset($_SESSION['autmsg']);
 ?>
</div>
<?php
}
else if(isset($_SESSION['autsuc'])){
?>
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['autsuc']."</b>";  
unset($_SESSION['autsuc']);
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
Add Author
</div>
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="includes/act_addauthor.php">

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Author Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="author">
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