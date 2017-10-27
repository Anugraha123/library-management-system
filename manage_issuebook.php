<?php
require 'blank_page.php';
require 'includes/functions/class.libray.php';
require 'includes/database/connection.php';
?>
<link rel="stylesheet" type="text/css" href="public/css/manage_book.css">
<style type="text/css">
.glyphicon-refresh-animate {
   -webkit-animation-name: rotateThis;
   -webkit-animation-duration: 2s;
   -webkit-animation-iteration-count: infinite;
   -webkit-animation-timing-function: linear;
}

@-webkit-keyframes "rotateThis" {
 from { 
        -webkit-transform: rotate( 0deg );  
    }
 to  { 
        -webkit-transform: rotate( 360deg ); 
    }
}
</style>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
Manage Book
</div>
<div class="panel-body">
<div class="col-md-12">
<form class="form-inline" role="form" method="POST">
  <div class="form-group">
    <label for="email"><p>Student ID </p></label>
    <input type="text" class="form-control" name="std_id">
  </div>
  <button type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
   <button type="" class="btn btn-primary"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span></button>
</form>

 <hr>
 <div class="table-responsive">
  <table class="table table-stripped table-bordered table hover table-condensed">
    <thead>
      <tr>
        <th>#SID</th>
        <th>Name</th>
        <th>Issued Date</th>
        <th>Total Books</th>
        <th>Submitted Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php
      $lib = new library;
      if(isset($_POST["submit"])){
        $std_id = $_POST['std_id'];
        $lib -> filter($std_id);
      }
    else{
        $lib -> select();
        unset($_SESSION['std_id']);
      }
?>
    </tbody>
  </table>
   </div>
</div>
</div>
</div>
</div>
</body>