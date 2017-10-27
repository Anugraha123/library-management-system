<?php
require 'blank_page.php';
require 'includes/functions/class.category.php';
require 'includes/database/connection.php';
?>
<style type="text/css">
  .panel-heading>.table, .panel-heading>.table th {
  margin: 0px;
  border: 0px;
}
</style>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
Manage Category
</div>
<div class="panel-body">

  <table class="table table-stripped table-bordered table hover table-condensed">
    <thead>
      <tr>
        <th>Category Name</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $cat = new category;
      $cat -> select_tb();

      ?>
    </tbody>
  </table>

</div>
</div>
</div>
</body>