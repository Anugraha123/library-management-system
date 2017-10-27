<?php
require 'blank_page.php';
require 'includes/functions/class.book.php';
require 'includes/database/connection.php';
?>
<link rel="stylesheet" type="text/css" href="public/css/manage_book.css">
<?php

   

?>
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
    <label for="email"><p>Book Name </p></label>
    <input type="text" class="form-control" name="book">
  </div>
  <div class="form-group">
    <select class="form-control" name="author">
      <?php
      $query = "SELECT author FROM author";
      $request = mysql_query($query);
      while($page = mysql_fetch_array($request)){
        echo "<option value=".$page['category'].">".$page['author']."</option>";
      }
      ?>
    </select>
  </div>
   <div class="form-group">
    <select class="form-control" name="category">
      <?php
      $query = "SELECT category FROM category";
      $request = mysql_query($query);
      while($page = mysql_fetch_array($request)){
        echo "<option value=".$page['category'].">".$page['category']."</option>";
      }
      ?>
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>

 <hr>
 <div class="table-responsive">
  <table class="table table-stripped table-bordered table hover table-condensed">
    <thead>
      <tr>
        <th>Book Name</th>
        <th>Author</th>
        <th>Category</th>
        <th>ISBN</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $bok = new book;

      if(isset($_POST["submit"])){
        $bok -> filter($_POST['book'],$_POST['author'],$_POST['category']);
      }
      else{
      $bok -> select_tb();
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