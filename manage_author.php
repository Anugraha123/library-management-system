<?php
require 'blank_page.php';
require 'includes/functions/class.author.php';
require 'includes/database/connection.php';
?>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
Manage Authors
</div>
<div class="panel-body">

  <table class="table table-stripped table-bordered table hover table-condensed">
    <thead>
      <tr>
        <th>Author Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $cat = new author;
      $cat -> select_tb();

      ?>
    </tbody>
  </table>
</div>
</div>
</div>
</body>