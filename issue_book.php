<?php

require 'blank_page.php';

?>

<body>
	<div class="container">
<?php
if(isset($_SESSION['libmsg'])){
?>
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['libmsg']."</b>"; 
unset($_SESSION['libmsg']);
 ?>
</div>
<?php
}
else if(isset($_SESSION['libsuc'])){
?>
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['libsuc']."</b>";  
unset($_SESSION['libsuc']);
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
Issue Book
</div>
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="includes/act_issuebook.php">

<div class="form-group">
<label class="control-label col-sm-2">*ISBN</label>
<div class="col-sm-10">
<div class="input-daterange">
<div class="input-group">
<input type="text" class="input-small form-control" name="isbn" value="<?php if(isset($_SESSION['isbn'])){echo $_SESSION['isbn']; unset($_SESSION['isbn']);}  ?>"> 
<span class="input-group-btn"><button name="fetch" type="submit" class="btn btn-default">FETCH</button></span>
<input type="text" class="input-small form-control" name="book" value="<?php if(isset($_SESSION['book'])){echo $_SESSION['book']; unset($_SESSION['book']);}  ?>">
</div>
</div>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Issue Date:</label>
<div class="col-sm-3">
<input type="date" class="form-control" name="date">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Student ID:</label>
<div class="col-sm-3">
<input type="text" class="form-control" name="std_id">
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Student Name:</label>
<div class="col-sm-5">
<input type="text" class="form-control" name="std_name">
</div>
</div>

<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-default" name="submit">Submit</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>