<?php
require 'blank_page.php';
require 'includes/database/connection.php';

$_SESSION['edit_id'] = $_GET['id'];

$query = "SELECT author from author WHERE id=".$_SESSION['edit_id']."";
$request = mysql_query($query);

$page = mysql_fetch_assoc($request);

?>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
Edit Category
</div>
<div class="panel-body">
  <form class="form-horizontal" role="form" method="POST" action="includes/act_editauthor.php">
<div class="form-group">
<label class="control-label col-sm-2">*Author Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="author" value="<?php echo $page['author']; ?>">
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
</body>