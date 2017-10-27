<?php
require 'blank_page.php';
require 'includes/database/connection.php';
require 'includes/functions/class.libray.php';
?>
<body>
	<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
Edit Issue Book
</div>
<div class="panel-body">
<form class="form-horizontal" role="form" method="POST" action="#">

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Student ID:</label>
<div class="col-sm-3">
<input type="text" class="form-control" name="std_id" value="<?php echo $_GET['std_id'] ?>" readonly>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="email">*Student Name:</label>
<div class="col-sm-5">
<input type="text" class="form-control" name="std_name" value="<?php echo $_GET['name'] ?>" readonly>
</div>
</div>

<table class="table table-stripped table-bordered table hover table-condensed">
    <thead>
      <tr>
        <th>ISBN</th>
        <th>Book Name</th>
        <th>Issued Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php

    $lib = new library;
    $lib -> view_booklist($_GET['std_id']);

    ?>
    
    </tbody>
  </table>

<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="icon-user icon-white" name="submit">Update</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>