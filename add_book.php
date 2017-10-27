<?php
require 'blank_page.php';
require 'includes/database/connection.php';
$query     = "SELECT category from category where status='c'";
$query1    = "SELECT * from author";
$request   = mysql_query($query);
$request1  = mysql_query($query1);

?>
<body>
<div class="container">
<?php
if(isset($_SESSION['bokmsg'])){
?>
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['bokmsg']."</b>"; 
unset($_SESSION['bokmsg']);
 ?>
</div>
<?php
}
else if(isset($_SESSION['boksuc'])){
?>
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo "<b>".$_SESSION['boksuc']."</b>";  
unset($_SESSION['boksuc']);
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
Add Book
</div>
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="includes/act_addbook.php">

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Book Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="book" placeholder="Book Name" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Category:</label>
<div class="col-sm-10">
<select class="form-control" name="category" required>
<?php
while($category = mysql_fetch_array($request)){
	echo "<option value=".$category['category'].">".$category['category']."</option>";
}
?>
</select>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Author:</label>
<div class="col-sm-10">
<select class="form-control" name="author" required>
<?php
while($author = mysql_fetch_array($request1)){
	echo "<option value=".$author['author'].">".$author['author']."</option>";
}
?>
</select>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*ISBN Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="isbn" placeholder="ISBN Number" required>
<br>
<p style="color:grey">ISBN Must be a unique number</p>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Price (Dollar):</label>
<div class="col-sm-5">
<input type="text" class="form-control" name="price" placeholder="Price" required>
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