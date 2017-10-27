<?php
require 'database/connection.php';
require 'functions/class.category.php';

$id = $_GET['id'];
$category = $_GET['category'];

$cat = new category;
$cat -> delete($id,$category);
?>