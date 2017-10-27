<?php
require 'database/connection.php';
require 'functions/class.category.php';
session_start();
@$status=($_POST['status']==null)?"uc":"c";
$category = $_POST['category'];
$id = $_SESSION['edit_id'];

	$cat = new category;
	$cat -> edit($category,$status,$id);

?>